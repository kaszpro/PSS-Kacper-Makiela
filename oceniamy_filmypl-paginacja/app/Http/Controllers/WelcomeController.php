<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Review;

class WelcomeController extends Controller
{
    public function index()
    {
        
        $movies = Movie::withAvg('reviews', 'rating')->get();

        
        $userReviews = auth()->check()
            ? Review::where('user_id', auth()->id())->with('movie')->get()
            : [];

        return view('welcome', compact('movies', 'userReviews'));
    }

    public function profile()
    {
        $user = auth()->user();

       
        $userReviews = $user->reviews()->with('movie')->get();

        return view('profile', compact('user', 'userReviews'));
    }
}
