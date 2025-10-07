@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-cover bg-center text-white" style="background-image: url('/images/bg1.webp');">
  <div class="fixed inset-0 bg-black bg-opacity-70 z-0"></div>
  <div class="relative z-10 p-6">
    <h2 class="text-3xl font-bold mb-4 text-orange-400">Available Vacancies</h2>
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
      <div class="bg-glass p-6 rounded-2xl hover:shadow-lg transition">
        <h3 class="text-xl font-semibold mb-2">Backend Developer</h3>
        <p class="text-white/70 text-sm mb-4">TechFlow Pvt Ltd</p>
        <p class="text-white/60 text-sm mb-4">Looking for an experienced developer with Laravel and MySQL knowledge.</p>
        <button class="bg-orange-400 hover:bg-orange-500 text-white px-4 py-2 rounded-md transition">Apply Now</button>
      </div>
      <div class="bg-glass p-6 rounded-2xl hover:shadow-lg transition">
        <h3 class="text-xl font-semibold mb-2">Frontend Developer</h3>
        <p class="text-white/70 text-sm mb-4">UI Studio</p>
        <p class="text-white/60 text-sm mb-4">Expert in React and TailwindCSS required.</p>
        <button class="bg-orange-400 hover:bg-orange-500 text-white px-4 py-2 rounded-md transition">Apply Now</button>
      </div>
    </div>
  </div>
</div>
@endsection
