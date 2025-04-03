@extends('layouts.app')

@section('title', 'Panel Moderatora')

@section('content')
<div class="container mt-5">
    <h1 class="text-center">Panel Moderatora</h1>

    <h3>Dodaj nowy film:</h3>
    <form method="POST" action="{{ route('moderator.store') }}">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Tytuł filmu</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Opis</label>
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Dodaj film</button>
    </form>

    <h3 class="mt-5">Lista filmów:</h3>
    <ul>
        @foreach ($movies as $movie)
            <li>
                {{ $movie->title }} 
                <form method="POST" action="{{ route('moderator.destroy', $movie->id) }}" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Usuń</button>
                </form>
            </li>
        @endforeach
    </ul>
</div>
@endsection
