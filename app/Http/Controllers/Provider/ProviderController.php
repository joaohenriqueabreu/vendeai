<?php

namespace App\Http\Controllers\Provider;

use App\Provider;
use App\Product;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;


class ProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $providers = Provider::paginate(5);
        $user = Auth::user();

        return view('providers.index', ['providers' => $providers, 'user' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();

        if(isset($user->provider)){
            return redirect()->route('providers.edit', $user->provider->id);
        } else {
            $provider = new Provider();

            return view('providers.create', ['provider' => $provider, 'user' => $user, 'user_id' => Auth::id()]);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $provider = new Provider();
        $user = Auth::user();

        $provider->fill($request->all());
        $provider->user()->associate($user);
        $provider->save();

        return redirect()->route('providers.products.index', $provider->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $provider = Provider::find($id);

        return redirect()->route('providers.products.index', $provider->id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $provider = Provider::find($id);
        $user = Auth::user();

        return view('providers.edit', ['provider' => $provider, 'user' => $user, 'user_id' => Auth::id()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $provider = Provider::find($id);

        $provider->fill($request->all());
        $provider->save();

        return redirect()->route('providers.products.index', $provider->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $provider = Provider::find($id);

        // Primeiro deleta os produtos
        foreach($provider->products as $product){
            $product->delete();
        }

        $provider->delete();

        return redirect()->route('providers.products.index');
    }

}
