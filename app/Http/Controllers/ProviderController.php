<?php

namespace App\Http\Controllers;

use App\Provider;
use App\Product;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $providers = Provider::all();

        return view('providers.index', ['providers' => $providers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provider = new Provider();

        return view('providers.create', ['provider' => $provider, 'user_id' => Auth::id()]);
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

        $provider->fill($request->all());
        $provider->save();

        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('products.index');
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

        return view('providers.edit', ['provider' => $provider, 'user_id' => Auth::id()]);
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

        return redirect()->route('products.index');
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

        return redirect()->route('products.index');
    }

    // Custom routes
    public function products($id)
    {
//        $user_id = Auth::id();
//
//        if($user_id != $id){
//            return redirect()->route('products.index');
//
//        } else {
            $provider = Provider::find($id);

            return view('providers.products', ['provider' => $provider]);
//        }
    }
}
