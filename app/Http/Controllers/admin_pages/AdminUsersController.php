<?php

namespace App\Http\Controllers\admin_pages;

use App\Http\Controllers\Controller;
use App\Models\create_user;
use App\Models\UserDesignation;
use Illuminate\Http\Request;


class AdminUsersController extends Controller
{
    public function admin_users(){
        // $view_user=create_user::paginate(5);
        $view_user=create_user::all();
        $view_designations=UserDesignation::all();
        return view('backend.admin_pages.admin_users',compact('view_user','view_designations'));
    }

    public function add_users(Request $add_users){
       // field name from db  || field name from form 
       create_user::create([
            'name'=>$add_users->name,
            'email'=>$add_users->email,
            'phone'=>$add_users->phone,
            'password'=>$add_users->password,
            'user_type'=>$add_users->user_type,
            'designation'=>$add_users->designation,
            
       ]);
       return redirect()->back();
    }

     public function delete_users($id){
          // dd($id);  
          create_user::destroy($id);
          return redirect()->back();
     }

     
    public function add_designation(Request $add_designation){
        // field name from db  || field name from form 
        UserDesignation::create([
             'user_designations'=>$add_designation->user_designation,       
        ]);       
       
         return redirect()->back();

     }  
     
     public function delete_designation($id){
          // dd($id);  
          UserDesignation::destroy($id);
          return redirect()->back();
     }
}
