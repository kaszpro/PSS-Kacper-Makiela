@extends('layouts.app')

@section('title', 'Logowanie')

@section('content')
<div class="container mt-5 d-flex justify-content-center">
    <div class="card shadow-sm p-4" style="max-width: 400px; width: 100%;">
        <h2 class="text-center mb-4">Logowanie</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Adres e-mail</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Wpisz e-mail" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Hasło</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Wpisz hasło" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Zaloguj się</button>
        </form>
    </div>
</div>
@endsection
