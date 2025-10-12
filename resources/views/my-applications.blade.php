@extends('dashboard.user')

@section('title', 'My Applications | Ruhuna Careers')

@section('content')
<div>
  <h2 class="text-3xl font-bold mb-4 text-orange-400">My Applications</h2>
  <div class="bg-glass p-6 rounded-2xl shadow-lg">
    <table class="w-full text-left text-white/80">
      <thead class="text-orange-300 border-b border-white/20">
        <tr>
          <th class="py-2">Job Title</th>
          <th class="py-2">Department</th>
          <th class="py-2">Status</th>
          <th class="py-2 text-right">Action</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($applications as $application)
          <tr class="border-b border-white/10">
            <td class="py-3">{{ $application->job->title }}</td>
            <td>{{ $application->job->department->name ?? 'N/A' }}</td>
            <td>
              @php
                $statusColors = [
                    'pending' => 'bg-yellow-500/20 text-yellow-300',
                    'in_review' => 'bg-green-500/20 text-green-300',
                    'accepted' => 'bg-blue-500/20 text-blue-300',
                    'rejected' => 'bg-red-500/20 text-red-300',
                ];
                $color = $statusColors[$application->status] ?? 'bg-gray-500/20 text-gray-300';
              @endphp
              <span class="{{ $color }} px-2 py-1 rounded-md text-sm capitalize">
                {{ str_replace('_', ' ', $application->status) }}
              </span>
            </td>
            <td class="text-right">
              <a href="{{ route('applications.show', $application->id) }}" class="text-orange-300 hover:text-orange-400">
                View
              </a>
            </td>
          </tr>
        @empty
          <tr>
            <td colspan="4" class="py-4 text-center text-gray-400">No applications found.</td>
          </tr>
        @endforelse
      </tbody>
    </table>
  </div>
</div>
@endsection
