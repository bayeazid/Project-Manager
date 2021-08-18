<?php

namespace App\Http\Controllers\admin_pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminTasksController extends Controller
{
    public function admin_tasks(){
        return view('backend.admin_pages.admin_tasks');
    }
}
