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
    public function admin_tasks()
    {
        $view_tasks = AddTasks::all();
        $show_taskname = TaskName::all();
        $view_projects = create_project::all();
        // $view_projects = create_project::where project_name = ;
        $view_user = create_user::all();
        // dd($view_tasks->all());
        // dd($show_taskname->all());
        //dd($view_projects);
        return view('backend.admin_pages.admin_tasks', compact('view_tasks', 'show_taskname', 'view_projects', 'view_user'));
    }

    public function add_tasks(Request $add_tasks)
    {
        // dd($add_tasks->all());
        // field name from db | method | field name from form
        AddTasks::create([
            'project_id' => $add_tasks->project_id,
            'task_name' => $add_tasks->task_name,
            'task_status' => $add_tasks->task_status,
            'name' => $add_tasks->name,
        ]);
        return redirect()->back();
    }

    public function new_tasks()
    {
        $view_tasks = AddTasks::all();
        $show_taskname = TaskName::all();
        $view_projects = create_project::all();
        // $view_projects = create_project::where project_name = ;
        $view_user = create_user::all();
        // dd($view_tasks->all());
        // dd($show_taskname->all());
        //dd($view_projects);
        return view('backend.admin_pages.new_tasks', compact('view_tasks', 'show_taskname', 'view_projects', 'view_user'));
    }



    public function delete_task($id)
    {
        AddTasks::destroy($id);
        return redirect()->back();
    }


    public function edit_task($id)
    {
        // dd($id);
        $view_tasks = AddTasks::find($id);
        $show_taskname = TaskName::all();
        $view_projects = create_project::all();
        $view_user = create_user::all();
        // dd($show_taskname);

        return view('backend.admin_pages.admin_tasks_update', compact('view_tasks', 'show_taskname', 'view_projects', 'view_user'));
    }


    public function update_task(Request $update_tasks, $id)
    {
        // dd($add_tasks->all());

        // dd($id);
        // field name from db | method | field name from form
        $update_task = AddTasks::find($id);
        $update_task->update([
            'task_name' => $update_tasks->task_name,
            'task_status' => $update_tasks->task_status,
            'project_name' => $update_tasks->project_name,
            'name' => $update_tasks->name,
        ]);
        return redirect()->route('admin_tasks');
    }

    public function add_tasks_name(Request $add_tasks_name)
    {
        // dd($add_tasks->all());
        // field name from db | method | field name from form
        TaskName::create([
            'task_name' => $add_tasks_name->task_name,
        ]);
        return redirect()->back();
    }

    public function delete_tasks_name($id)
    {
        TaskName::destroy($id);
        return redirect()->back();
    }
}
