@extends('layouts.app')

@section('title', $movie->title)

@section('content')
<div class="container mt-5">
    <h1>{{ $movie->title }}</h1>
    <p>{{ $movie->description }}</p>
    <p>Średnia ocena: {{ $movie->reviews->avg('rating') ?: 'Brak ocen' }}</p>

    <h3>Oceny:</h3>
    <ul>
        @forelse ($movie->reviews as $review)
            <li>
                <strong>{{ $review->user->name }}</strong>: {{ $review->rating }}/10
                <p>{{ $review->review }}</p>
            </li>
        @empty
            <p>Brak ocen dla tego filmu.</p>
        @endforelse
    </ul>

    @auth
        <h3>Dodaj ocenę</h3>
        <form method="POST" action="{{ route('movies.rate', $movie->id) }}">
            @csrf
            <div class="mb-3">
                <label for="rating" class="form-label">Twoja ocena (1-10):</label>
                <input type="number" class="form-control" id="rating" name="rating" min="1" max="10" required>
            </div>
            <div class="mb-3">
                <label for="review" class="form-label">Twoja recenzja:</label>
                <textarea class="form-control" id="review" name="review" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Dodaj ocenę</button>
        </form>
    @endauth
</div>
@endsection
