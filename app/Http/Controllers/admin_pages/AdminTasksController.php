<?php

namespace App\Http\Controllers\admin_pages;

use App\Http\Controllers\Controller;
use App\Models\AddTasks;
use App\Models\TaskName;
use App\Models\create_project;
use App\Models\create_user;
use Illuminate\Http\Request;

class AdminTasksController extends Controller
{
    public function admin_tasks(){
        $view_tasks = AddTasks::all();        
        $show_taskname = TaskName::all();   
        $view_projects = create_project::all();
        // $view_projects = create_project::where project_name = ;
        $view_user=create_user::all();   	
        // dd($view_tasks->all());
        // dd($show_taskname->all());
        return view('backend.admin_pages.admin_tasks',compact('view_tasks','show_taskname','view_projects','view_user'));
    }

    public function add_tasks(Request $add_tasks ){
        // dd($add_tasks->all());
        // field name from db | method | field name from form
        AddTasks::create([
            'task_name'=>$add_tasks->task_name,
            'task_status'=>$add_tasks->task_status,
            'project_name'=>$add_tasks->project_name,
            'name'=>$add_tasks->name,
        ]);
       return redirect()->back();
    }

    public function delete_tasks($id){
        AddTasks::destroy($id);
        return redirect()->back();
    }

    public function add_tasks_name(Request $add_tasks_name ){
        // dd($add_tasks->all());
        // field name from db | method | field name from form
        TaskName::create([
            'task_name'=>$add_tasks_name->task_name,
          ]);
       return redirect()->back();
    }

    public function delete_tasks_name($id){
        TaskName::destroy($id);
        return redirect()->back();
    }
}


