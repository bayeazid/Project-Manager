<?php

namespace App\Http\Controllers\admin_pages;

use App\Http\Controllers\Controller;
use App\Models\AddTasks;
use App\Models\TaskName;
use Illuminate\Http\Request;

class AdminTasksController extends Controller
{
    public function admin_tasks(){
        $view_tasks = AddTasks::all();
        return view('backend.admin_pages.admin_tasks',compact('view_tasks'));
    }

    public function add_tasks(Request $add_tasks ){
        // dd($add_tasks->all());
        // field name from db | method | field name from form
        AddTasks::create([
            'task_name'=>$add_tasks->task_name,
            'task_status'=>$add_tasks->task_status,
        ]);
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
}


