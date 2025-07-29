<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Dashboard | Ruhuna Careers</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .bg-glass {
      background: rgba(255, 255, 255, 0.07);
      backdrop-filter: blur(12px);
      -webkit-backdrop-filter: blur(12px);
      border: 1px solid rgba(255, 255, 255, 0.1);
    }
  </style>
</head>
<body class="relative min-h-screen bg-cover bg-center text-white" style="background-image: url('/images/bg1.webp');">

  <!-- Overlay -->
  <div class="absolute inset-0 bg-black bg-opacity-80 z-0"></div>

  <div class="relative z-10 p-6">
    <div class="flex justify-between items-center mb-8">
      <h1 class="text-3xl font-bold">User Dashboard</h1>
      <a href="{{ route('logout') }}" class="text-orange-400 hover:underline">Logout</a>
    </div>

    <div class="grid gap-6 md:grid-cols-2 xl:grid-cols-3">
      <div class="bg-glass p-6 rounded-xl shadow-lg">
        <h2 class="text-xl font-semibold mb-2">My Applications</h2>
        <p class="text-white/70">Track and view your submitted job applications.</p>
      </div>
      <div class="bg-glass p-6 rounded-xl shadow-lg">
        <h2 class="text-xl font-semibold mb-2">Available Vacancies</h2>
        <p class="text-white/70">Browse and apply for open job opportunities.</p>
      </div>
      <div class="bg-glass p-6 rounded-xl shadow-lg">
        <h2 class="text-xl font-semibold mb-2">Edit Profile</h2>
        <p class="text-white/70">Update your information and preferences.</p>
      </div>
    </div>
  </div>

</body>
</html>
