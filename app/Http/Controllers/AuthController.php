<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function viewLogin()
    {
        return view ("auth.login");
    }

    public function doLogin()
    {
        return view ("auth.login");
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
