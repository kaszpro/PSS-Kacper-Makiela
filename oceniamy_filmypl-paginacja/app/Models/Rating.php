<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'movie_id', 'rating', 'review']; // Pola, które można masowo wypełniać

    // Relacja z filmem
    public function movie()
    {
        return $this->belongsTo(Movie::class); // Ocena należy do filmu
    }

    // Relacja z użytkownikiem (jeśli jest potrzebna)
    public function user()
    {
        return $this->belongsTo(User::class); // Ocena należy do użytkownika
    }
}
