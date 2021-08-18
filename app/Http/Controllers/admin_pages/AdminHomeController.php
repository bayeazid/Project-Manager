<?php

namespace App\Http\Controllers\admin_pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function admin_home(){
        return view('backend.admin_pages.admin_home');
    }
}
