<?php

namespace App\Http\Controllers\user_pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserProjectsController extends Controller
{
    public function user_projects(){
        return view('backend.user_pages.user_projects');
    }
}
