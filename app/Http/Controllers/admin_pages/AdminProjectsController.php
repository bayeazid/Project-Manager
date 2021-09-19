<?php

namespace App\Http\Controllers\admin_pages;

use App\Http\Controllers\Controller;
use App\Models\add_catagory;
use App\Models\add_catagory2;
use App\Models\AddCatagory;
// use App\Models\AddCategory2;
use App\Models\AddCategory;
use App\Models\create_project;
use App\Models\AddTasks;
use App\Models\create_user;
use Illuminate\Http\Request;

class AdminProjectsController extends Controller
{
    public function admin_projects(){
        // $view_projects=create_project::paginate(5);
        $view_projects = create_project::all();
        // $view_projects = create_project::where('project_name')->get();
        // dd($add_projects->all());
        //dd("ok");
        $view_catagory = AddCatagory::all();
        // $view_catagory = AddCategory2::all();
        //dd($view_catagory->all());
        $view_tasks = AddTasks::all();
        $view_user=create_user::all();
        // dd($view_project->all)
        return view('backend.admin_pages.admin_projects',compact('view_projects','view_catagory','view_tasks','view_user'));
    }

    public function add_projects(Request $add_projects ){
        
        // field name from db | method | field name from form
        create_project::create([
            'project_name'=>$add_projects->project_name,
            'project_catagory'=>$add_projects->project_catagory,
            'project_description'=>$add_projects->project_description,
            'project_status'=>$add_projects->project_status,
            'project_tasks'=>$add_projects->project_tasks,
            'project_users'=>$add_projects->project_users,
            'project_resources'=>$add_projects->project_resources,               
       ]);
       return redirect()->back();
    }

    public function delete_project($id){
        create_project::destroy($id);
        return redirect()->back();
    }

    public function addcategory(Request $request)
    {
       // dd($request->all());
        // $request= AddCategory2::create([
        $request= AddCatagory::create([
            // field name from db | method | field name from form
            // 'catagory_name2' =>$request->catagory_name,
            'catagory_name' =>$request->catagory_name,
        ]);

        if($request){
            return redirect()->route('add_project')->with('success','Category added succefully');
        }
        else{
            return redirect()->back()->with('error','Something went wrong');
        }
    }
    
    public function delete_category($id){
        AddCatagory::destroy($id);
        return redirect()->back();
    }
}
