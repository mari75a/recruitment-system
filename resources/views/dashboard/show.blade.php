@extends('dashboard.user')

@section('title', $job->title . ' | Job Details')

@section('content')
<div class="max-w-3xl mx-auto">
  <div class="bg-glass p-8 rounded-2xl shadow-lg">
    <h2 class="text-3xl font-bold mb-4 text-orange-400">{{ $job->title }}</h2>

    <p class="text-white/80 mb-2">
      <strong>Department:</strong> {{ $job->department->name ?? 'N/A' }}
    </p>

    @if($job->location)
      <p class="text-white/80 mb-2">
        <strong>Location:</strong> {{ $job->location }}
      </p>
    @endif

    @if($job->deadline)
      <p class="text-white/80 mb-2">
        <strong>Deadline:</strong> {{ \Carbon\Carbon::parse($job->deadline)->format('d M Y') }}
      </p>
    @endif

    <div class="my-4">
      <h3 class="text-xl font-semibold text-white mb-2">Requirements:</h3>
      <p class="text-white/70 leading-relaxed">{{ $job->requirements }}</p>
    </div>

    @if($job->description)
    <div class="my-4">
      <h3 class="text-xl font-semibold text-white mb-2">Job Description:</h3>
      <p class="text-white/70 leading-relaxed">{{ $job->description }}</p>
    </div>
    @endif

    <div class="mt-6 flex gap-4">
      <a href="{{ route('user.applications.create', $job->id) }}" 
   class="inline-block bg-orange-400 hover:bg-orange-500 text-white font-semibold px-4 py-2 rounded-lg transition">
   Apply Now
</a>

      <a href="{{ route('jobs.index') }}" 
         class="bg-gray-600 hover:bg-gray-700 text-white font-semibold px-4 py-2 rounded-lg transition">
        Back to Jobs
      </a>
    </div>
  </div>
</div>
@endsection
