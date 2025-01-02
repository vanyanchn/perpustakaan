<?php

use App\Http\Controllers\registerController;
use App\Http\Controllers\loginController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('vanya');
// });

Route::get('/register', [registerController::class,'panggil_register']);
Route::get('/login', [loginController::class, 'tampilan_login']);

Route::get('/', function () {
    return view('home');
});

Route::get('/dasboard', function () {
    return view('landing.dasboard');
});
