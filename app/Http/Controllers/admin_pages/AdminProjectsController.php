<?php

namespace App\Http\Controllers\admin_pages;

use App\Http\Controllers\Controller;
use App\Models\add_catagory;
use App\Models\add_catagory2;
use App\Models\AddCategory2;
use App\Models\create_project;
use Illuminate\Http\Request;

class AdminProjectsController extends Controller
{
    public function admin_projects(){
        // $view_projects=create_project::paginate(5);
        $view_projects=create_project::all();
        // dd($add_projects->all());
        return view('backend.admin_pages.admin_projects',compact('view_projects'));
    }

    public function add_projects(Request $add_projects ){
        
        // field name from db | method | field name from form
        create_project::create([
            'project_name'=>$add_projects->project_name,
            'project_catagory'=>$add_projects->project_catagory,
            'project_description'=>$add_projects->project_description,
            'project_status'=>$add_projects->project_status,            
       ]);
       return redirect()->back();
    }

    public function addcategory(Request $request)
    {
       // dd($request->all());
       $request= AddCategory2::create([
            'catagory_name2' =>$request->catagory_name,
        ]);

        if($request){
            return redirect()->route('add_project')->with('success','Category added succefully');
        }
        else{
            return redirect()->back()->with('error','Something went wrong');
        }
    }
    
    
}
