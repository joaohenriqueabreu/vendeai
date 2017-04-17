<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function home()
    {
//        return view('home');
        $user = Auth::user();

        if(isset($user->admin)){
            return redirect()->route('providers.products.index', $user->provider->id);
        }

        if(isset($user->provider)){
            return redirect()->route('providers.products.index', $user->provider->id);
        }

        if(isset($user->reseller)){
            return redirect()->route('resellsers.products.index', $user->reseller->id);
        }

        return redirect()->route('pages.profile');
    }

    public function profile()
    {
        return view('auth.profile');
    }

    public function account()
    {
        return view('auth.profile');
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
