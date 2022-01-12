<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function checkUserType()
    {
        if (!Auth::check()) {
            //return redirect()->route('login');
            return view('welcome');
        }

        if (Auth::user()->userType == 'Admin') {
            return redirect()->route('admin.dashboard');
        }

        if (Auth::user()->userType == 'User') {
            return redirect()->route('user.dashboard');
        }
    }
}
