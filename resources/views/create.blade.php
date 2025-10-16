@extends('dashboard.user')

@section('title', 'Apply for ' . $job->title)

@section('content')
<div class="max-w-xl mx-auto bg-glass p-6 rounded-2xl shadow-lg">
  <h2 class="text-2xl font-bold mb-4 text-orange-400">Apply for {{ $job->title }}</h2>
  <p class="text-white/70 mb-4"><strong>Department:</strong> {{ $job->department->name ?? 'N/A' }}</p>

  <form action="{{ route('user.applications.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="job_id" value="{{ $job->id }}">

    <div class="mb-4">
      <label class="block text-white/80 mb-1">Upload Resume (optional)</label>
      <input type="file" name="resume" class="w-full p-2 rounded-lg bg-white/10 text-white focus:outline-none">
      @error('resume')
        <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
      @enderror
    </div>

    <div class="mb-4">
      <label class="block text-white/80 mb-1">Cover Letter (optional)</label>
      <textarea name="cover_letter" rows="4" class="w-full p-2 rounded-lg bg-white/10 text-white focus:outline-none"></textarea>
      @error('cover_letter')
        <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
      @enderror
    </div>

    <button type="submit" class="w-full bg-orange-400 hover:bg-orange-500 text-white font-semibold py-2 rounded-lg transition">
      Submit Application
    </button>
  </form>
</div>
@endsection
