<?php

namespace App\Http\Controllers\user_pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserNotificationController extends Controller
{
    public function user_notification(){
        return view('backend.user_pages.user_notification');
    }
}
