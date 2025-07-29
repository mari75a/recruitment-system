<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>User Dashboard | Ruhuna Careers</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .bg-glass {
      background: rgba(255, 255, 255, 0.08);
      backdrop-filter: blur(12px);
      -webkit-backdrop-filter: blur(12px);
      border: 1px solid rgba(255, 255, 255, 0.1);
    }
  </style>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/css/all.min.css" />
</head>
<body class="bg-cover bg-center min-h-screen text-white" style="background-image: url('/images/bg1.webp');">

  <!-- Overlay -->
  <div class="fixed inset-0 bg-black bg-opacity-70 z-0"></div>

  <div class="relative z-10 flex min-h-screen">
    <!-- Sidebar -->
    <aside class="w-64 p-6 bg-glass hidden md:block">
      <h1 class="text-2xl font-bold mb-8 text-orange-400">Ruhuna Careers</h1>
      <nav class="space-y-4">
        <a href="#" class="flex items-center gap-3 text-white hover:text-orange-300 transition">
          <i class="fas fa-home"></i> Dashboard
        </a>
        <a href="#" class="flex items-center gap-3 text-white hover:text-orange-300 transition">
          <i class="fas fa-briefcase"></i> My Applications
        </a>
        <a href="#" class="flex items-center gap-3 text-white hover:text-orange-300 transition">
          <i class="fas fa-search"></i> Vacancies
        </a>
        <a href="#" class="flex items-center gap-3 text-white hover:text-orange-300 transition">
          <i class="fas fa-user"></i> Edit Profile
        </a>
        <a href="{{ route('logout') }}" class="flex items-center gap-3 text-red-400 hover:text-red-300 transition">
          <i class="fas fa-sign-out-alt"></i> Logout
        </a>
      </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-6 overflow-auto">
      <div class="mb-6">
        <h2 class="text-3xl font-bold">Welcome, {{ Auth::user()->name }}</h2>
        <p class="text-white/60 mt-1">Here's what's happening with your account today.</p>
      </div>

      <!-- Dashboard Cards -->
      <div class="grid gap-6 sm:grid-cols-2 xl:grid-cols-3">
        <div class="bg-glass p-6 rounded-2xl shadow-lg hover:shadow-xl transition">
          <div class="flex items-center justify-between">
            <div>
              <h3 class="text-lg font-semibold mb-1">Applications</h3>
              <p class="text-2xl font-bold">4</p>
            </div>
            <i class="fas fa-file-alt text-3xl text-orange-300"></i>
          </div>
        </div>

        <div class="bg-glass p-6 rounded-2xl shadow-lg hover:shadow-xl transition">
          <div class="flex items-center justify-between">
            <div>
              <h3 class="text-lg font-semibold mb-1">Available Jobs</h3>
              <p class="text-2xl font-bold">12</p>
            </div>
            <i class="fas fa-briefcase text-3xl text-orange-300"></i>
          </div>
        </div>

        <div class="bg-glass p-6 rounded-2xl shadow-lg hover:shadow-xl transition">
          <div class="flex items-center justify-between">
            <div>
              <h3 class="text-lg font-semibold mb-1">Messages</h3>
              <p class="text-2xl font-bold">2</p>
            </div>
            <i class="fas fa-envelope text-3xl text-orange-300"></i>
          </div>
        </div>
      </div>

      <!-- Recent Activity or Announcements -->
      <div class="mt-10 bg-glass p-6 rounded-2xl shadow-lg">
        <h3 class="text-xl font-semibold mb-4">Recent Activity</h3>
        <ul class="space-y-3 text-white/80 text-sm">
          <li>✔️ You applied for <strong>Software Engineer</strong> at CodeWave</li>
          <li>📢 New position opened: <strong>Project Manager</strong></li>
          <li>🗓 Interview scheduled with <strong>HR of TechFlow</strong></li>
        </ul>
      </div>
    </main>
  </div>

</body>
</html>
