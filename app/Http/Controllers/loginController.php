<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function tampilan_login()
    {
        return view('landing.login');
    }
}
