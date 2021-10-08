<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\user;

class login extends Controller
{
    public function login(){
        return view('backend.admin_pages.login');
    }


    public function loginPost(Request $request)
    {
        $credentials = $request->except('_token');
        // dd($credentials);
        if (Auth::attempt($credentials)) {


            if(auth()->user()->role=='admin'){
                return redirect()->route('home');
            }
            // $request->session()->regenerate();

            // return redirect()->intended('home');           

        }
        return redirect()->back()->with('message', 'invalid user info.');

       
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('log');
    }

    // public function create_user()
    // {

    //     $user = user::where('role', '!=', 'customer')->get();
    //     return view('backend.layouts.user', compact('user'));
    // }
}
