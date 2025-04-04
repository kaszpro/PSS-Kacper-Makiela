<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'movie_id', 'rating', 'review'];

    // Relacja z użytkownikiem
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relacja z filmem
    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }
}
