<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function home()
    {
        $user = Auth::user();

        if(isset($user->admin)){
            return redirect()->route('providers.products.index', $user->provider->id);
        }

        if(isset($user->provider)){
            return redirect()->route('providers.products.index', $user->provider->id);
        }

        if(isset($user->reseller)){
            return redirect()->route('resellers.products.index', $user->reseller->id);
        }

        return redirect()->route('pages.profile');
    }

    public function profile()
    {
        $user = Auth::user();
        $has_provider_account = isset($user->provider);
        $has_reseller_account = isset($user->reseller);
        $has_admin_account = isset($user->admin);

        return view('auth.profile', array('user' => $user,'has_provider_account' => $has_provider_account, 'has_reseller_account' => $has_reseller_account, 'has_admin_account' => $has_admin_account));
    }

    public function account()
    {
        return redirect()->route('pages.profile');
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

    /// Error
    public function notFound()
    {
        return $this->home();
    }

    public function unauthorized()
    {
        return $this->home();
    }

}
