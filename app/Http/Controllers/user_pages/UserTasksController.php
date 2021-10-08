<?php

namespace App\Http\Controllers\user_pages;

use App\Http\Controllers\Controller;
use App\Models\AddTasks;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserTasksController extends Controller
{
    public function user_tasks(){
        $data=Auth::user()->name;
        $tasks=AddTasks::where([
            ['name',$data],
            ['task_status','Queud']
        ])->get();
        return view('backend.user_pages.user_tasks',compact('tasks'));
    }

    public function tasks_accepted($id)
    {
        AddTasks::find($id)->update([
            'task_status'=>'Accepted'
        ]);
        return redirect()->back();
    }

    public function accepted_tasks()
    {
        $data=Auth::user()->name;
        $tasks=AddTasks::where([
            ['name',$data],
            ['task_status','Accepted']
        ])->get();
//        dd($tasks);
        return view('backend.user_pages.user_accepted_tasks',compact('tasks'));

    }

    public function completed_tasks($id)
    {
        AddTasks::find($id)->update([
            'task_status'=>'Completed'
        ]);
        return redirect()->back();
    }

    public function completed_task()
    {
        $data=Auth::user()->name;
        $tasks=AddTasks::where([
            ['name',$data],
            ['task_status','Completed']
        ])->get();
//        dd($tasks);
        return view('backend.user_pages.user_completed_tasks',compact('tasks'));

    }


}
