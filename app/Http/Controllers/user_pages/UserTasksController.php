<?php

namespace App\Http\Controllers\user_pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserTasksController extends Controller
{
    public function user_tasks(){
        return view('backend.user_pages.user_tasks');
    }
}
