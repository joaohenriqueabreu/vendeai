<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function profile()
    {
        return view('auth.profile');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }
}
