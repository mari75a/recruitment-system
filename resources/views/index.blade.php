<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Welcome | Ruhuna Careers</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .bg-glass {
      background: rgba(255, 255, 255, 0.05);
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.1);
    }
  </style>
</head>
<body class="relative min-h-screen bg-cover bg-center flex items-center justify-center text-white" style="background-image: url('/images/bg1.webp');">

  <!-- Overlay -->
  <div class="absolute inset-0 bg-black bg-opacity-70 z-0"></div>

  <div class="relative z-10 text-center max-w-xl px-6">
    <div class="bg-glass p-10 rounded-2xl shadow-lg">
      <h1 class="text-4xl font-bold mb-4">Welcome to Ruhuna Careers</h1>
      <p class="text-lg text-white/80 mb-6">Find your dream job and apply with just a few clicks. Start your journey with us.</p>
      <div class="flex justify-center gap-4">
        <a href="{{ route('login') }}"
           class="bg-orange-500 hover:bg-orange-600 transition px-6 py-2 rounded-lg font-semibold">
          Login
        </a>
        <a href="{{ route('register') }}"
           class="bg-white text-black hover:bg-gray-200 transition px-6 py-2 rounded-lg font-semibold">
          Register
        </a>
      </div>
    </div>
  </div>

</body>
</html>
