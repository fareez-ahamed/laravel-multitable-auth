<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    public function index()
    {
        return view('admin.home');
    }

    public function login()
    {
        return view('admin.login');
    }

    public function handleLogin(Request $req)
    {
        if(Auth::guard('webadmin')->attempt($req->only(['email', 'password']))) 
        {
            return redirect()->route('admin.home');
        }

        return redirect()->back()->with('error', 'Invalid Credentials');
    }

    public function logout()
    {
        Auth::guard('webadmin')->logout();

        return redirect()->route('admin.login');
    }
}
