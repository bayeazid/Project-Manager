<?php

namespace App\Http\Controllers\user_pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserFilesController extends Controller
{
    public function user_files(){
        return view('backend.user_pages.user_files');
    }
}
