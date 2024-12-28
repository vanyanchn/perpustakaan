<?php

use App\Http\Controllers\registerController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('vanya');
// });
Route::get('/login', function () {
    return view('landing.login');
});
Route::get('/register', [registerController::class,'panggil_register']);
Route::get('/', function () {
    return view('home');
});

Route::get('/dasboard', function () {
    return view('landing.dasboard');
});