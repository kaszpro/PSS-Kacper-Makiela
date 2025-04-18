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
            ->paginate(10);

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

        $movie = Movie::findOrFail($movieId);

        Review::updateOrCreate(
            ['user_id' => auth()->id(), 'movie_id' => $movieId],
            ['rating' => $request->rating, 'review' => $request->review]
        );

        if ($request->ajax()) {
            return response()->json(['message' => 'Dziękujemy za ocenę!']);
        }

        return redirect()->route('movies.show', $movieId)->with('success', 'Dziękujemy za ocenę!');
    }
}
