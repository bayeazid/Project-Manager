<?php

namespace App\Http\Controllers\admin_pages;

use App\Http\Controllers\Controller;
use App\Models\add_catagory;
use App\Models\add_catagory2;
use App\Models\AddCatagory;
use App\Models\AddCategory;
use App\Models\create_project;
use App\Models\AddTasks;
use App\Models\create_user;
use Illuminate\Http\Request;

class AdminProjectsController extends Controller
{
    public function admin_projects()
    {
        // $view_projects=create_project::paginate(5);
        $view_projects = create_project::paginate(10);
        // $view_projects = create_project::where('project_name')->get();
        // dd($add_projects->all());
        //dd("ok");
        $view_catagory = AddCatagory::all();
        // $view_catagory = AddCategory2::all();
        //dd($view_catagory->all());
        // $view_tasks = AddTasks::find($id);
        $view_tasks = AddTasks::all();
        $view_user = create_user::all();
        // dd($view_project->all)
        return view('backend.admin_pages.admin_projects', compact('view_projects', 'view_catagory', 'view_tasks', 'view_user'));
    }

    public function projects_details($id)
    {
        $view_projects = create_project::find($id);
        // $view_projects = create_project::all();
         //dd($view_projects);
        $view_catagory = AddCatagory::all();
        
        $view_tasks=AddTasks::where('project_id',$id)->get();
        //dd($view_tasks);
        $view_user = create_user::all();
        // dd($view_project->all)
        return view('backend.admin_pages.admin_projects_details', compact('view_projects', 'view_catagory', 'view_tasks', 'view_user','id'));
    }

    public function add_projects(Request $add_projects)
    {

        // field name from db | method | field name from form
        create_project::create([
            'project_name' => $add_projects->project_name,
            'project_catagory' => $add_projects->project_catagory,
            'project_description' => $add_projects->project_description,
            'project_status' => $add_projects->project_status,
            // 'project_tasks' => $add_projects->project_tasks,
            // 'project_users' => $add_projects->project_users,
            // 'project_resources' => $add_projects->project_resources,
        ]);
        return redirect()->route('admin_projects');
    }

    public function new_projects()
    {
        // $view_projects=create_project::paginate(5);
        $view_projects = create_project::all();
        // $view_projects = create_project::where('project_name')->get();
        // dd($add_projects->all());
        //dd("ok");
        $view_catagory = AddCatagory::all();
        // $view_catagory = AddCategory2::all();
        //dd($view_catagory->all());
        // $view_tasks = AddTasks::find($id);
        $view_tasks = AddTasks::all();
        $view_user = create_user::all();
        // dd($view_project->all)
        return view('backend.admin_pages.new_projects', compact('view_projects', 'view_catagory', 'view_tasks', 'view_user'));
    }

    public function delete_project($id)
    {
        create_project::destroy($id);
        return redirect()->back();
    }
    
    // public function edit_project($id){
    //     $view_projects = create_project::all();
    //     return view('backend.admin_pages.edit_project',compact('view_projects'));
    // }

    public function edit_project($id){
        // $view_projects = create_project::all();
        $view_projects = create_project::find($id);
        // dd($id);
        // dd($view_projects);
        $view_catagory = AddCatagory::all();
        $view_tasks = AddTasks::all();
        return view('backend.admin_pages.admin_projects_update',compact('view_projects', 'view_catagory', 'view_tasks'));
    }

    public function update_project(Request $update_projects, $id)
    {        
        // field name from db | method | field name from form
        $update_project=create_project::find($id);
        $update_project->update([
            'project_name' => $update_projects->project_name,
            'project_catagory' => $update_projects->project_catagory,
            'project_description' => $update_projects->project_description,
            'project_status' => $update_projects->project_status,
            // 'project_tasks' => $add_projects->project_tasks,
            // 'project_users' => $add_projects->project_users,
            // 'project_resources' => $add_projects->project_resources,
        ]);
        return redirect()->route('admin_projects');
    }


    public function addcategory(Request $request)
    {
        // dd($request->all());
        // $request= AddCategory2::create([
        $request = AddCatagory::create([
            // field name from db | method | field name from form
            // 'catagory_name2' =>$request->catagory_name,
            'catagory_name' => $request->catagory_name,
        ]);

        if ($request) {
            return redirect()->route('add_project')->with('success', 'Category added succefully');
        } else {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    public function delete_category($id)
    {
        AddCatagory::destroy($id);
        return redirect()->back();
    }
}
