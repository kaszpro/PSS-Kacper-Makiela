<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description'];

    // Relacja z recenzjami
    public function reviews()
    {
        return $this->hasMany(Review::class); // Film ma wiele recenzji
    }
}

