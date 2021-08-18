<?php

namespace App\Http\Controllers\admin_pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminNotificationController extends Controller
{
    public function admin_notification(){
        return view('backend.admin_pages.admin_notification');
    }
}
