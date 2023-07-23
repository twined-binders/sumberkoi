<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        // $validUSer = $request->only('username', 'password');

        // if (Auth::attempt($validUser)) {
        //     return redirect()->intended(); // Redirect to the intended destination
        // }

        // return redirect('/')->with('error', 'Invalid credentials. Access denied.');
    }
}
