<?php

namespace App\Http\Controllers\admin_pages;

use App\Http\Controllers\Controller;
use App\Models\create_project;
use Illuminate\Http\Request;

class AdminProjectsController extends Controller
{
    public function admin_projects(){
        // return view('backend.admin_pages.admin_projects');
        $view_projects=create_project::all();
        // dd($add_projects->all());
        return view('backend.admin_pages.admin_projects',compact('view_projects'));
    }

    public function add_projects(Request $add_projects ){
        // field name from db  || field name from form
        create_project::create([
            'project_name'=>$add_projects->project_name,
            'project_catagory'=>$add_projects->project_catagory,
            'project_status'=>$add_projects->project_status,
            'project_description'=>$add_projects->project_description,
       ]);
    }
}
