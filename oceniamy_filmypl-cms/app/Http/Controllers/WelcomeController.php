<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Review;
use App\Models\Page; // Dodajemy model Page

class WelcomeController extends Controller
{
    public function index()
    {
        // Pobieramy filmy i ich średnią ocenę
        $movies = Movie::withAvg('reviews', 'rating')->get();

        // Pobieramy recenzje użytkownika (jeśli zalogowany)
        $userReviews = auth()->check()
            ? Review::where('user_id', auth()->id())->with('movie')->get()
            : [];

        // Pobieramy wszystkie strony CMS
        $pages = Page::all(); // Pobieramy strony z bazy danych

        // Zwracamy widok i przekazujemy dane
        return view('welcome', compact('movies', 'userReviews', 'pages'));
    }

    public function profile()
    {
        $user = auth()->user();

        // Pobieramy recenzje użytkownika
        $userReviews = $user->reviews()->with('movie')->get();

        return view('profile', compact('user', 'userReviews'));
    }
}
