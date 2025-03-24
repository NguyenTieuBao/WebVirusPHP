<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('Admin.login');    
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email:filter',
            'password' => 'required',
        ]);
        if (Auth::attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ])) {

            return redirect()->route('category.index');
        }

        Session::flash('error', 'Email or Password is invalid');

        return redirect()->back();   
    }

    public function signOut() {
        Session::flush();
        Auth::logout();
   
        return redirect()->route('login');
    }
}
