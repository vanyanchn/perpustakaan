<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('vanya');
// });
Route::get('/login', function () {
    return view('landing.login');
});
Route::get('/register', function () {
    return view('landing.register');
});
Route::get('/', function () {
    return view('home');
});
Route::get('/', function () {
    return view('home');
});
Route::get('/dasboard', function () {
    return view('landing.dasboard');
});