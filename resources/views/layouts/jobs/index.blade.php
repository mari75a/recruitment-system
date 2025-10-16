@extends('dashboard.user')

@section('title', 'Available Jobs | Ruhuna Careers')

@section('content')
<div>
  <h2 class="text-3xl font-bold mb-6 text-orange-400">Available Jobs</h2>

  <div class="grid gap-6 sm:grid-cols-1 md:grid-cols-2 xl:grid-cols-3">
    @forelse ($jobs as $job)
      <div class="bg-glass p-6 rounded-2xl shadow-lg hover:shadow-xl transition">
        <h3 class="text-xl font-semibold mb-2 text-white">{{ $job->title }}</h3>
        <p class="text-white/70 mb-2">
          <strong>Department:</strong> {{ $job->department->name ?? 'N/A' }}
        </p>
        <p class="text-white/70 mb-4">
          <strong>Requirements:</strong> {{ Str::limit($job->requirements, 80) }}
        </p>
        <p class="text-white/60 text-sm mb-4">
          <strong>Deadline:</strong> {{ $job->deadline ? $job->deadline->format('d M Y') : 'Open' }}
        </p>
        <a href="{{ route('jobs.show', $job->id) }}" class="inline-block bg-orange-400 hover:bg-orange-500 text-white font-semibold px-4 py-2 rounded-lg transition">
          View Details
        </a>
      </div>
    @empty
      <p class="text-gray-400 col-span-3 text-center">No jobs available at the moment.</p>
    @endforelse
  </div>
</div>
@endsection
