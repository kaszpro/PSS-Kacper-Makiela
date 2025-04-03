@extends('layouts.app')

@section('title', 'Lista Filmów')

@section('content')
<h1 class="text-center">Lista Filmów</h1>

<!-- Formularz wyszukiwania -->
<form method="GET" action="{{ route('movies.index') }}" class="mb-4">
    <div class="input-group">
        <input type="text" name="search" class="form-control" placeholder="Wyszukaj film..." value="{{ request('search') }}">
        <button type="submit" class="btn btn-primary">Szukaj</button>
    </div>
</form>

<div class="row">
    @foreach ($movies as $movie)
    <div class="col-md-4">
        <div class="card mb-3">
            <div class="card-body">
                <h5>{{ $movie->title }}</h5>
                <p>{{ $movie->description }}</p>
                <p>Średnia ocena: {{ $movie->avg_rating ?: 'Brak ocen' }}</p>

                @auth
                <form method="POST" action="{{ route('movies.rate', $movie->id) }}">
                    @csrf
                    <div class="mb-3">
                        <label for="rating">Ocena (1-10)</label>
                        <input type="number" id="rating" name="rating" class="form-control" min="1" max="10" required>
                    </div>
                    <div class="mb-3">
                        <label for="review">Recenzja</label>
                        <textarea id="review" name="review" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Oceń</button>
                </form>
                @endauth
            </div>
        </div>
    </div>
    @endforeach
</div>

<!-- Linki do paginacji -->
<div class="d-flex justify-content-center mt-4">
    {{ $movies->links() }}
</div>

@endsection
