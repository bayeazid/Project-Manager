<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth()->check() && auth()->user()->role=='user')
        {
            return $next($request);
        }
//        else
//        {
//            return redirect()->back()->with('message','You do not have permission');
//        }
        else
        {
            Auth::logout();
            return redirect()->route('log')->with('message','You do not have permission');
        }


    }
    }

