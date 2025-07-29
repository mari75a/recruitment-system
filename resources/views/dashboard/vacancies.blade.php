@extends('layouts.app')

@section('title', 'Available Vacancies')

@section('content')
<div class="dashboard-container">
  <div class="glass-card dash-header">
    <h2>Available Vacancies</h2>
    <p>Explore and apply for open positions</p>
  </div>

  <div class="dashboard-grid">
    @foreach ($vacancies as $vacancy)
      <div class="glass-card card-small">
        <h4>{{ $vacancy->title }}</h4>
        <p>{{ $vacancy->department }} • Deadline: {{ \Carbon\Carbon::parse($vacancy->deadline)->format('d M Y') }}</p>
        <a href="{{ route('vacancies.show', $vacancy->id) }}" class="btn full">Apply Now</a>
      </div>
    @endforeach
  </div>
</div>
@endsection