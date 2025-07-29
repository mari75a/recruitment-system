<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vacancies | Ruhuna Careers</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .bg-glass {
      background: rgba(255, 255, 255, 0.08);
      backdrop-filter: blur(12px);
      -webkit-backdrop-filter: blur(12px);
      border: 1px solid rgba(255, 255, 255, 0.1);
    }
  </style>
</head>
<body class="bg-cover bg-center min-h-screen text-white" style="background-image: url('/images/bg1.webp');">
  <div class="fixed inset-0 bg-black bg-opacity-70 z-0"></div>

  <div class="relative z-10 p-6 max-w-6xl mx-auto">
    <div class="flex justify-between items-center mb-6">
      <h1 class="text-3xl font-bold text-orange-400">Available Vacancies</h1>
      <a href="{{ route('user.dashboard') }}" class="text-orange-200 hover:underline">← Back to Dashboard</a>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
      @forelse($vacancies as $vacancy)
        <div class="bg-glass p-5 rounded-2xl shadow-lg hover:shadow-xl transition duration-200">
          <h2 class="text-xl font-bold text-orange-300 mb-1">{{ $vacancy->title }}</h2>
          <p class="text-white/80 text-sm mb-1">{{ $vacancy->company ?? 'Confidential Company' }}</p>
          <p class="text-white/60 text-sm mb-3">{{ $vacancy->location ?? 'Location not specified' }}</p>
          <p class="text-white/70 text-sm mb-4 line-clamp-3">{{ $vacancy->description }}</p>
          <a href="{{ route('vacancies.show', $vacancy->id) }}"
             class="inline-block bg-orange-500 hover:bg-orange-600 text-white text-sm font-semibold px-4 py-2 rounded-lg transition">
            View & Apply
          </a>
        </div>
      @empty
        <p class="col-span-full text-center text-white/80">No vacancies available at the moment.</p>
      @endforelse
    </div>
  </div>
</body>
</html>
