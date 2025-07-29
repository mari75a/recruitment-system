<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login | Ruhuna Careers</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .bg-glass {
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(16px);
      -webkit-backdrop-filter: blur(16px);
      border: 1px solid rgba(255, 255, 255, 0.15);
    }
  </style>
</head>
<body class="relative min-h-screen bg-cover bg-center flex items-center justify-center" style="background-image: url('/images/bg1.webp');">

  <!-- Dark overlay -->
  <div class="absolute inset-0 bg-black bg-opacity-70 z-0"></div>

  <!-- Glass card -->
  <div class="relative z-10 bg-glass text-white shadow-2xl rounded-2xl w-full max-w-md p-10">
    <h2 class="text-3xl font-bold mb-6 text-center">Welcome Back</h2>

    @if (session('error'))
      <div class="mb-4 text-red-300 text-sm text-center">
        {{ session('error') }}
      </div>
    @endif

    @if ($errors->any())
      <div class="mb-4">
        <ul class="text-sm text-red-300 space-y-1">
          @foreach ($errors->all() as $error)
            <li>• {{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form method="POST" action="{{ route('login.submit') }}" class="space-y-6">
      @csrf

      <!-- Email Field -->
      <div class="relative z-0 w-full group">
        <input type="email" name="email" id="email" value="{{ old('email') }}"
          class="block py-3 px-4 w-full text-white bg-white/10 border border-white/30 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-400 focus:border-orange-500 peer placeholder-transparent"
          required />
        <label for="email"
          class="absolute text-sm text-white/70 duration-200 transform -translate-y-3 scale-75 top-2 left-4 origin-[0] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-3 peer-focus:scale-75 peer-focus:-translate-y-3">
          Email Address
        </label>
      </div>

      <!-- Password Field -->
      <div class="relative z-0 w-full group">
        <input type="password" name="password" id="password"
          class="block py-3 px-4 w-full text-white bg-white/10 border border-white/30 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-400 focus:border-orange-500 peer placeholder-transparent"
          required />
        <label for="password"
          class="absolute text-sm text-white/70 duration-200 transform -translate-y-3 scale-75 top-2 left-4 origin-[0] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-3 peer-focus:scale-75 peer-focus:-translate-y-3">
          Password
        </label>
      </div>

      <!-- Submit -->
      <button type="submit"
        class="w-full bg-orange-500 text-white py-3 rounded-xl font-semibold hover:bg-orange-600 transition duration-200">
        Login
      </button>
    </form>

    <p class="mt-6 text-sm text-center text-white/80">
      Don’t have an account?
      <a href="{{ route('register') }}" class="text-orange-300 hover:underline">Register here</a>
    </p>
  </div>

</body>
</html>
