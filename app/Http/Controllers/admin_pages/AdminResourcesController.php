<?php

namespace App\Http\Controllers\admin_pages;
use App\Models\create_project;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminResourcesController extends Controller
{
    public function admin_resources(){
        $view_projects = create_project::all();
        return view('backend.admin_pages.admin_resourses',compact('view_projects'));
    }

    public function admin_resources_id($id){
        $view_projects = create_project::find($id);
        return view('backend.admin_pages.admin_resourses_id',compact('view_projects'));
    }
}
