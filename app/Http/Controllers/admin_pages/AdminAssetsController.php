<?php

namespace App\Http\Controllers\admin_pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminAssetsController extends Controller
{
    public function admin_assets(){
        return view('backend.admin_pages.admin_assets');
    }
}
