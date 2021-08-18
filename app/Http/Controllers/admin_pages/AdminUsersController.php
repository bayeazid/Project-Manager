<?php

namespace App\Http\Controllers\admin_pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminUsersController extends Controller
{
    public function admin_users(){
        return view('backend.admin_pages.admin_users');
    }
}
