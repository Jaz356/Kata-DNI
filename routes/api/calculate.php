<?php

use Illuminate\Support\Facades\Route;
use App\Services\DniCalculator;

Route::post('/dni/calculate', [DniCalculator::class, 'calculate']);
Route::get('/dni/generate', [DniCalculator::class, 'generateDni']);