<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SupervisorController extends Controller
{
    public function supervisor(){
        return view('backend.partials.supervisor_master');
    }
}
