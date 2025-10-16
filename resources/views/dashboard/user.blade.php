<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>@yield('title', 'User Dashboard | Ruhuna Careers')</title>
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
        <a href="{{ url('/dashboard') }}" class="flex items-center gap-3 text-white hover:text-orange-300 transition">
          <i class="fas fa-home"></i> Dashboard
        </a>
        <a href="{{ route('applications.index') }}" class="flex items-center gap-3 text-white hover:text-orange-300 transition">
          <i class="fas fa-briefcase"></i> My Applications
        </a>
        <a href="{{ route('jobs.index') }}" class="flex items-center gap-3 text-white hover:text-orange-300 transition">
          <i class="fas fa-search"></i> Vacancies
        </a>
        <a href="{{ url('/profile/edit') }}" class="flex items-center gap-3 text-white hover:text-orange-300 transition">
          <i class="fas fa-user"></i> Edit Profile
        </a>
        <form action="{{ route('logout') }}" method="POST">
          @csrf
          <button type="submit" class="flex items-center gap-3 text-red-400 hover:text-red-300 transition w-full text-left">
            <i class="fas fa-sign-out-alt"></i> Logout
          </button>
        </form>
      </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-6 overflow-auto">
      @yield('content')
    </main>
  </div>
</body>
</html>
