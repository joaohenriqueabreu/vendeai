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

    public function account()
    {
        return view('auth.account');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }

    public function landing()
    {
        return view('landing.home');
    }

    public function reseller()
    {
        return view('landing.revendedor');
    }

    public function newReseller()
    {
        return view('landing.parts.forms.revendedor');
    }

    public function provider()
    {
        return view('landing.parceiro');
    }

    public function newProvider()
    {
        return view('landing.parts.forms.parceiro');
    }

}
