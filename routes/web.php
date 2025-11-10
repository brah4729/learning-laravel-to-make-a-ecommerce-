<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome'); // default halaman Laravel
});

Route::get('/hello', function () {
    return "Hello World!";
});
Route::get('/about', function () {
    return "Ini halaman About";
});
use App\Http\Controllers\HomeController;

Route::get('/home', [HomeController::class, 'index']);
