@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-cover bg-center text-white" style="background-image: url('/images/bg1.webp');">
  <div class="fixed inset-0 bg-black bg-opacity-70 z-0"></div>
  <div class="relative z-10 p-6 max-w-3xl mx-auto">
    <h2 class="text-3xl font-bold mb-4 text-orange-400">Edit Profile</h2>
    <div class="bg-glass p-6 rounded-2xl shadow-lg">
      <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data" class="space-y-5">
        @csrf
        @method('PUT')
        
        <div>
          <label class="block mb-2 text-sm text-white/70">Full Name</label>
          <input type="text" name="name" value="{{ Auth::user()->name }}" class="w-full px-4 py-2 rounded-md bg-white/10 text-white focus:outline-none focus:ring-2 focus:ring-orange-400"/>
        </div>

        <div>
          <label class="block mb-2 text-sm text-white/70">Email Address</label>
          <input type="email" name="email" value="{{ Auth::user()->email }}" class="w-full px-4 py-2 rounded-md bg-white/10 text-white focus:outline-none focus:ring-2 focus:ring-orange-400"/>
        </div>

        <div>
          <label class="block mb-2 text-sm text-white/70">Upload Resume (PDF)</label>
          <input type="file" name="resume" accept=".pdf" class="w-full text-white"/>
        </div>

        <button type="submit" class="bg-orange-400 hover:bg-orange-500 text-white px-6 py-2 rounded-md font-semibold transition">Save Changes</button>
      </form>
    </div>
  </div>
</div>
@endsection
