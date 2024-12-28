<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registerController extends Controller
{
public function panggil_register(){
    return view('landing.register');
}
}