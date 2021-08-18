<?php

namespace App\Http\Controllers\admin_pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminFilesController extends Controller
{
    public function admin_files(){
        return view('backend.admin_pages.admin_files');
    }
}
