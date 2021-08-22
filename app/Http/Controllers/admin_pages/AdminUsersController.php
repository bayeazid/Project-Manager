<?php

namespace App\Http\Controllers\admin_pages;

use App\Http\Controllers\Controller;
use App\Models\create_user;
use Illuminate\Http\Request;

class AdminUsersController extends Controller
{
    public function admin_users(){
        return view('backend.admin_pages.admin_users');
    }

    public function add_users(Request $add_users){
       // field name from db  || field name from form 
       create_user::create([
            'name'=>$add_users->name,
            'email'=>$add_users->email,
            'password'=>$add_users->password,
            'phone'=>$add_users->phone,
            'designation'=>$add_users->designation,
            'user_type'=>$add_users->user_type
       ]);
    }
}
