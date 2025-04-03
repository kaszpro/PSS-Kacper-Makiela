MoviesController.php

gdzie jest poprawione stronnicowanie do 10 elementów




<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Review;

class MoviesController extends Controller
{
    public function index(Request $request)
    {
        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'Musisz się zalogować, aby zobaczyć filmy!');
        }

        $search = $request->input('search');

        $movies = Movie::withAvg('reviews', 'rating')
            ->when($search, function ($query, $search) {
                return $query->where('title', 'like', '%' . $search . '%');
            })
            ->paginate(10); // Poprawiono stronnicowanie

        return view('movies.index', compact('movies'));
    }

    public function show($id)
    {
        $movie = Movie::with('reviews.user')->findOrFail($id);

        return view('movies.show', compact('movie'));
    }

    public function rate(Request $request, $movieId)
    {
        $request->validate([
            'rating' => 'required|integer|min:1|max:10',
            'review' => 'nullable|string|max:1000',
        ]);

        Review::updateOrCreate(
            ['user_id' => auth()->id(), 'movie_id' => $movieId],
            ['rating' => $request->rating, 'review' => $request->review]
        );

        return redirect()->route('movies.show', $movieId)->with('success', 'Dziękujemy za ocenę!');
    }
}




oraz  index.blade.php



gdzie dodaje widok stronnicowania oraz linki do stronnicowania





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
