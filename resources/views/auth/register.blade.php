<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Register | Ruhuna Careers</title>
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

  <!-- Glass form -->
  <div class="relative z-10 bg-glass text-white shadow-2xl rounded-2xl w-full max-w-2xl p-10">
    <h2 class="text-3xl font-bold mb-6 text-center">Create Your Account</h2>

    @if ($errors->any())
      <div class="mb-4">
        <ul class="text-sm text-red-300 space-y-1">
          @foreach ($errors->all() as $error)
            <li>• {{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form method="POST" action="{{ route('register.submit') }}" class="grid grid-cols-1 sm:grid-cols-2 gap-6">
      @csrf

      <div class="relative group">
        <input type="text" name="name" id="name" value="{{ old('name') }}" required
               class="block py-3 px-4 w-full text-white bg-white/10 border border-white/30 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-400 focus:border-orange-500 peer placeholder-transparent" />
        <label for="name"
               class="absolute text-sm text-white/70 duration-200 transform -translate-y-3 scale-75 top-2 left-4 origin-[0] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-3 peer-focus:scale-75 peer-focus:-translate-y-3">
          Full Name
        </label>
      </div>

      <div class="relative group">
        <input type="email" name="email" id="email" value="{{ old('email') }}" required
               class="block py-3 px-4 w-full text-white bg-white/10 border border-white/30 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-400 focus:border-orange-500 peer placeholder-transparent" />
        <label for="email"
               class="absolute text-sm text-white/70 duration-200 transform -translate-y-3 scale-75 top-2 left-4 origin-[0] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-3 peer-focus:scale-75 peer-focus:-translate-y-3">
          Email Address
        </label>
      </div>

      <div class="relative group">
        <input type="text" name="phone" id="phone" value="{{ old('phone') }}" required
               class="block py-3 px-4 w-full text-white bg-white/10 border border-white/30 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-400 focus:border-orange-500 peer placeholder-transparent" />
        <label for="phone"
               class="absolute text-sm text-white/70 duration-200 transform -translate-y-3 scale-75 top-2 left-4 origin-[0] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-3 peer-focus:scale-75 peer-focus:-translate-y-3">
          Phone Number
        </label>
      </div>

      <div class="relative group">
        <input type="text" name="nic" id="nic" value="{{ old('nic') }}" required
               class="block py-3 px-4 w-full text-white bg-white/10 border border-white/30 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-400 focus:border-orange-500 peer placeholder-transparent" />
        <label for="nic"
               class="absolute text-sm text-white/70 duration-200 transform -translate-y-3 scale-75 top-2 left-4 origin-[0] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-3 peer-focus:scale-75 peer-focus:-translate-y-3">
          NIC
        </label>
      </div>

      <div class="relative group">
        <input type="date" name="dob" id="dob" value="{{ old('dob') }}" required
               class="block py-3 px-4 w-full text-white bg-white/10 border border-white/30 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-400 focus:border-orange-500" />
        <label for="dob"
               class="absolute text-sm text-white/70 top-2 left-4">Date of Birth</label>
      </div>

      <div class="relative group">
        <input type="password" name="password" id="password" required
               class="block py-3 px-4 w-full text-white bg-white/10 border border-white/30 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-400 focus:border-orange-500 peer placeholder-transparent" />
        <label for="password"
               class="absolute text-sm text-white/70 duration-200 transform -translate-y-3 scale-75 top-2 left-4 origin-[0] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-3 peer-focus:scale-75 peer-focus:-translate-y-3">
          Password
        </label>
      </div>

      <div class="col-span-full">
        <button type="submit"
                class="w-full mt-2 bg-orange-500 text-white py-3 rounded-xl font-semibold hover:bg-orange-600 transition duration-200">
          Register
        </button>
      </div>
    </form>

    <p class="mt-6 text-sm text-center text-white/80">
      Already have an account?
      <a href="{{ route('login') }}" class="text-orange-300 hover:underline">Login here</a>
    </p>
  </div>

</body>
</html>
