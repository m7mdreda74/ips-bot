<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IPGeneratorController;

Route::get('/generate-ip', [IPGeneratorController::class, 'generateIP']);

Route::get('/', function () {
    return view('welcome');
});
