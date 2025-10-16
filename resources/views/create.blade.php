@extends('dashboard.user')

@section('title', 'Apply for ' . $job->title)

@section('content')
<div class="max-w-xl mx-auto bg-glass p-6 rounded-2xl shadow-lg">
  <h2 class="text-2xl font-bold mb-4 text-orange-400">Apply for {{ $job->title }}</h2>
  <p class="text-white/70 mb-4"><strong>Department:</strong> {{ $job->department->name ?? 'N/A' }}</p>

  <form action="{{ route('user.applications.store', $job->id) }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="mb-4">
        <label for="qualification" class="block text-white">Qualification</label>
        <input type="text" name="qualification" id="qualification" class="w-full p-2 rounded text-black" required>
    </div>

    <div class="mb-4">
        <label for="experience" class="block text-white">Experience</label>
        <input type="text" name="experience" id="experience" class="w-full p-2 rounded text-black" required>
    </div>

    <div class="mb-4">
        <label for="skills" class="block text-white">Skills</label>
        <input type="text" name="skills" id="skills" class="w-full p-2 rounded text-black" required>
    </div>

    <div class="mb-4">
        <label for="document" class="block text-white">Upload Resume</label>
        <input type="file" name="document" id="document" class="w-full p-2 rounded text-black" required>
    </div>

    <button type="submit" class="bg-orange-500 hover:bg-orange-600 text-white font-semibold px-4 py-2 rounded-lg">
        Submit Application
    </button>
</form>

</div>
@endsection
