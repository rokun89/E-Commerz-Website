<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login()
    {
        return view('backend.pages.login');
    }
    public function login_store(Request $request)
    {
        // dd($request->all());
        $Credentials=$request->only(['email','password']);
        if(Auth::attempt($Credentials))
        {
            notify()->success('Login Successfull');
            return redirect()->route('base.url');
        }
        notify()->success('Invalid Credentials');
        return redirect()->back();
    }
    public function logout()
    {
        Auth::logout();
        notify()->success('Logout Successfull');
        return redirect()->back();
    }
    
}
