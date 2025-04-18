@extends('layouts.app')

@section('title', 'Strona główna')

@section('content')
<div class="container mt-5">
    @if(Auth::check())
        <h1 class="text-center">Witaj, {{ Auth::user()->name }}!</h1>
        <div class="text-center mt-3">
            <a href="{{ route('movies.index') }}" class="btn btn-primary">Zobacz filmy</a>
            <form method="POST" action="{{ route('logout') }}" class="d-inline">
                @csrf
                <button type="submit" class="btn btn-danger">Wyloguj się</button>
            </form>
        </div>
    @else
        <h1 class="text-center">Zaloguj się lub zarejestruj, aby oceniać filmy!</h1>
        <div class="text-center mt-3">
            <a href="{{ route('login') }}" class="btn btn-primary">Zaloguj się</a>
            <a href="{{ route('register') }}" class="btn btn-success">Zarejestruj się</a>
        </div>
    @endif
</div>
@endsection
