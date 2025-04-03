@extends('layouts.app')

@section('title', 'Twój profil')

@section('content')
<div class="container mt-5">
    <h1 class="text-center">Witaj, {{ $user->name }}!</h1>
    <p class="text-center">Twój adres e-mail: {{ $user->email }}</p>

    <h3>Twoje recenzje:</h3>
    <ul>
        @forelse ($userReviews as $review)
            <li>
                Film: {{ $review->movie->title ?? 'Film usunięty' }} - Ocena: {{ $review->rating }}
                <p>{{ $review->review }}</p>
            </li>
        @empty
            <p>Nie dodałeś jeszcze żadnych recenzji.</p>
        @endforelse
    </ul>
</div>
@endsection
