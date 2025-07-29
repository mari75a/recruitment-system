<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Show login form (optional if using route view)
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Login user
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->withErrors([
            'email' => 'Invalid credentials.',
        ]);
    }

    // Show registration form (optional if using route view)
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    // Register user
    public function register(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'phone' => 'nullable|string|max:15',
        'nic' => 'nullable|string|max:12',
        'dob' => 'nullable|date',
        'password' => 'required|min:6|confirmed',
    ]);

    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'nic' => $request->nic,
        'dob' => $request->dob,
        'password' => Hash::make($request->password),
    ]);

    Auth::login($user);
    return redirect()->route('dashboard');
}

    // Logout user
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
