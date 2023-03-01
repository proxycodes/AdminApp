<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function viewLogin()
    {
        return view ("auth.login");
    }

    public function doLogin(Request $request)
    {
        //dd($request);
        $request->validate([
            "userEmail"=>"required|email",
            "userpassword"=>"required"
        ]);
        
        // if(\Auth::attempt($request->only('userEmail', 'userpassword'))){
        //     return redirect('aa-home');
        // }

        //return redirect('login')->withError("invalid Details");

        //return $request->input();
        
        //return view ("auth.login");
    }

    public function viewRegister()
    {
        return view ("auth.register");
    }

    public function doRegister()
    {
        return view ("auth.register");
    }
}
