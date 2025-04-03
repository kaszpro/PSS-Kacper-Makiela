<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\ModeratorController;

// Strona główna
Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

// Rejestracja
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// Logowanie
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

// Wylogowanie
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Profil użytkownika
Route::get('/profile', [WelcomeController::class, 'profile'])->name('profile')->middleware('auth');

// Filmy (ogólnodostępne)
Route::get('/movies', [MoviesController::class, 'index'])->name('movies.index');
Route::get('/movies/{movie}', [MoviesController::class, 'show'])->name('movies.show');
Route::post('/movies/{movie}/rate', [MoviesController::class, 'rate'])->name('movies.rate');
Route::get('/movies', [MoviesController::class, 'index'])->name('movies.index');


// Panel moderatora (tylko dla zalogowanych użytkowników)
Route::middleware(['auth'])->group(function () {
    Route::get('/moderator', [ModeratorController::class, 'index'])->name('moderator.index');
    Route::post('/moderator/movies', [ModeratorController::class, 'store'])->name('moderator.store');
    Route::delete('/movies/{movie}', [ModeratorController::class, 'destroy'])->name('moderator.destroy');
});

