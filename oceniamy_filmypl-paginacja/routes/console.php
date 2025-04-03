<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

// Definiowanie niestandardowych komend Artisan
Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Wyświetla inspirujący cytat');
