<?php

namespace App\Http\Controllers\user_pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserHomeController extends Controller
{
    public function user_home(){
        return view('backend.user_pages.user_home');
    }
}
