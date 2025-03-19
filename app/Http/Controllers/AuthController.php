<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showRegister()
    {
        $name = "SkillMatcher"; 
        return view('auth.register', compact('name'));
    }
    

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|regex:/^[a-zA-Z\s]+$/',
            'email' => 'required|email',
            'phone' => 'required|digits:10',
            'password' => 'required|min:6|max:8|regex:/^(?=.*[A-Z])(?=.*\W)/',
        ]);

        return redirect()->route('login')->with('success', 'Registration successful!');
    }

  
        public function showLogin()
        {
            $name = "SkillMatcher"; 
            return view('auth.login', compact('name'));
        }
    

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6|max:8|regex:/^(?=.*[A-Z])(?=.*\W)/',
        ]);

        return redirect()->route('home')->with('success', 'Login successful!');
    }
}
