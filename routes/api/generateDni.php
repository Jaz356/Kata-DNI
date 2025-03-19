<?php

use Illuminate\Support\Facades\Route;
use App\Services\DniService;

Route::post('/dni/calculate', [DniService::class, 'calculate']);
Route::get('/dni/generate', [DniService::class, 'generateDni']);