<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class ModeratorController extends Controller
{
    
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            if (auth()->check() && auth()->user()->isModerator()) {
                return $next($request);
            }
            return redirect('/')->withErrors('Brak dostępu do panelu moderatora.');
        });
    }

    
    public function index()
    {
        $movies = Movie::all();
        return view('moderator.panel', compact('movies'));
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string|max:1000',
        ]);

        Movie::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->route('moderator.index')->with('success', 'Film został dodany.');
    }

    
    public function destroy(Movie $movie)
    {
        $movie->delete();
        return redirect()->route('moderator.index')->with('success', 'Film został usunięty.');
    }
    
}
