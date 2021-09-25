<?php

namespace App\Http\Controllers\admin_pages;
use App\Models\create_project;
use App\Models\AddTasks;
use App\Models\create_user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function admin_home(){
        $projects_count = create_project::all()->count();
        $tasks_count = AddTasks::all()->count();
        $user_count = create_user::all()->count();
        return view('backend.admin_pages.admin_home',compact('projects_count','tasks_count','user_count'));
    }
}
