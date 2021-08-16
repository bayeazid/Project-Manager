<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AssetsController extends Controller
{
    public function assets(){
        return view('backend.pages.assets');
    }
}
