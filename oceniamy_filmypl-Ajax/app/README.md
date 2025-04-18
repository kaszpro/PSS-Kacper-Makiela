Dodałem Ajaxa do oceniania filmów
Zamiast klasycznego POST, dane są wysyłane do serwera AJAXem
Serwer odpowiada JSON-em z komunikatem  „Dziękujemy za ocenę”
Komunikat jest wyświetlany na stronie bez przeładowania




Dodałem atrybut data-movie-id do formularza

Dodałem klasę .ajax-rating-form

Dodałem JS (jQuery) z .on('submit', ...), który wysyła dane AJAXem



index.blade.php



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
                <form method="POST" class="ajax-rating-form" data-url="{{ route('movies.rate', $movie->id) }}">
                    @csrf
                    <div class="mb-3">
                        <label for="rating">Ocena (1-10)</label>
                        <input type="number" name="rating" class="form-control" min="1" max="10" required>
                    </div>
                    <div class="mb-3">
                        <label for="review">Recenzja</label>
                        <textarea name="review" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Oceń</button>
                </form>
                <div class="ajax-message mt-2"></div>
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

@push('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function () {
    // Dodaj CSRF token do wszystkich zapytań AJAX
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('.ajax-rating-form').on('submit', function (e) {
        e.preventDefault();

        let form = $(this);
        let url = form.data('url'); // pobiera poprawny adres z route()
        let formData = form.serialize();

        $.ajax({
            type: 'POST',
            url: url,
            data: formData,
            success: function (response) {
                form.next('.ajax-message').html(`<div class="alert alert-success">${response.message}</div>`);
            },
            error: function (xhr) {
                let msg = 'Coś poszło nie tak.';
                if (xhr.responseJSON && xhr.responseJSON.message) {
                    msg = xhr.responseJSON.message;
                }
                form.next('.ajax-message').html(`<div class="alert alert-danger">${msg}</div>`);
            }
        });
    });
});
</script>
@endpush




app.blade.php




<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Oceniamy Filmy.pl')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    @include('partials.navigation') <!-- Nawigacja -->

    <div class="container mt-5">
        @yield('content') <!-- Główna treść -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

    
    @stack('scripts')

</body>
</html>




