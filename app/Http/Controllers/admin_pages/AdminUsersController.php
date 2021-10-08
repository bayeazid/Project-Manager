<?php

namespace App\Http\Controllers\admin_pages;

use App\Http\Controllers\Controller;
use App\Models\create_user;
use App\Models\User;
use App\Models\UserDesignation;
use Illuminate\Http\Request;


class AdminUsersController extends Controller
{
     public function admin_users()
     {
          $view_user=User::paginate(5);
          // $view_user = create_user::all();
          $view_designations = UserDesignation::all();
          return view('backend.admin_pages.admin_users', compact('view_user', 'view_designations'));
     }

     public function add_users(Request $add_users)
     {
        // dd($add_users->all());
          // field name from db  || field name from form
          User::create([
               'name' => $add_users->name,
               'email' => $add_users->email,
               'phone' => $add_users->phone,
               'password' =>bcrypt($add_users->password),
               'user_type' => $add_users->user_type,
               'designation' => $add_users->designation,
          ]);
          // return redirect()->back();
          return redirect()->route('admin_users');
     }

     public function new_users()
     {
          // $view_user=create_user::paginate(5);
          $view_user = create_user::all();
          $view_designations = UserDesignation::all();
          return view('backend.admin_pages.new_users', compact('view_user', 'view_designations'));
     }

     public function delete_users($id)
     {
          // dd($id);
          create_user::destroy($id);
          return redirect()->back();
     }

     public function edit_user($id){
          $update_user=create_user::find($id);
          return view('backend.admin_pages.admin_users_update',compact('update_user'));
      }



     public function add_designation(Request $add_designation)
     {
          // field name from db  || field name from form
          UserDesignation::create([
               'user_designations' => $add_designation->user_designation,
          ]);

          return redirect()->back();
     }

     public function delete_designation($id)
     {
          // dd($id);
          UserDesignation::destroy($id);
          return redirect()->back();
     }
}
