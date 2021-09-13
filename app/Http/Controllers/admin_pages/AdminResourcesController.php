<?php

namespace App\Http\Controllers\admin_pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminResourcesController extends Controller
{
    public function admin_resources(){
        return view('backend.admin_pages.admin_resourses');
    }
}
