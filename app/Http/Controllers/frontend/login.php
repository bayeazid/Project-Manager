<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class login extends Controller
{
    public function login(){
        return view('frontend.login');
    }
}
