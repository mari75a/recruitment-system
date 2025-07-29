<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $vacancy->title }} | Ruhuna Careers</title>
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

  <div class="relative z-10 max-w-3xl mx-auto p-6 mt-10">
    <a href="{{ route('vacancies.index') }}" class="text-orange-200 hover:underline mb-6 inline-block">← Back to Vacancies</a>

    <div class="bg-glass p-8 rounded-2xl shadow-xl">
      <h1 class="text-3xl font-bold text-orange-400 mb-4">{{ $vacancy->title }}</h1>
      
      <div class="mb-2 text-white/80 text-sm">
        <span class="font-semibold">Company:</span> {{ $vacancy->company ?? 'Confidential' }}
      </div>
      <div class="mb-2 text-white/80 text-sm">
        <span class="font-semibold">Location:</span> {{ $vacancy->location ?? 'Not specified' }}
      </div>
      <div class="mb-6 text-white/80 text-sm">
        <span class="font-semibold">Posted on:</span> {{ $vacancy->created_at->format('F j, Y') }}
      </div>

      <h2 class="text-lg font-semibold text-orange-300 mb-2">Job Description</h2>
      <p class="text-white/90 leading-relaxed mb-6 whitespace-pre-line">{{ $vacancy->description }}</p>

      {{-- Add more fields if available --}}
      @if($vacancy->salary)
        <div class="text-white/70 mb-2">
          <span class="font-semibold">Salary:</span> {{ $vacancy->salary }}
        </div>
      @endif
      @if($vacancy->requirements)
        <div class="text-white/70 mb-6">
          <span class="font-semibold">Requirements:</span>
          <ul class="list-disc list-inside mt-1">
            @foreach(explode("\n", $vacancy->requirements) as $req)
              <li>{{ $req }}</li>
            @endforeach
          </ul>
        </div>
      @endif

      <a href="#" class="inline-block bg-orange-500 hover:bg-orange-600 text-white font-semibold px-6 py-3 rounded-lg transition">
        Apply Now
      </a>
    </div>
  </div>
</body>
</html>
