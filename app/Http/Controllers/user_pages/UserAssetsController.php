<?php

namespace App\Http\Controllers\user_pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserAssetsController extends Controller
{
    public function user_assets(){
        return view('backend.user_pages.user_assets');
    }
}
