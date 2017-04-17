<?php

namespace App\Http\Controllers;

use App\Product;
use App\Provider;
use App\Reseller;
use Illuminate\Http\Request;

class ProviderProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($provider_id)
    {
        $provider = Provider::find($provider_id);

        return view('providers.products.index', ['provider' => $provider]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $provider_id)
    {
        $product = new Product();

        $providers = Provider::pluck('name', 'id');

        $provider = Provider::find($provider_id);

        return view('providers.products.create',['product' => $product, 'providers' => $providers, 'provider' => $provider]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $provider_id)
    {
        $product = new Product();
        $provider = Provider::find($provider_id);

        $product->fill($request->all());
        $product->provider()->associate($provider);

        $product->save();

        return redirect()->route('providers.products.index', $provider->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($provider_id, $product_id)
    {
        $product = Product::find($product_id);
        $provider = Provider::find($provider_id);

        return view('providers.products.show', ['product' => $product, 'provider' => $provider]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($provider_id, $product_id)
    {
        $product = Product::find($product_id);
        $provider = Provider::find($provider_id);

        $providers = Provider::pluck('name', 'id');

        $default = $product->provider->id;

        return view('providers.products.edit', array('product' => $product, 'providers' => $providers, 'provider' => $provider));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($provider_id, $product_id, Request $request)
    {
        $product = Product::find($product_id);
        $provider = Provider::find($provider_id);

        $product->fill($request->all());

        if(isset($request->url)){
            $product->url = $request->url;
        }

        $product->save();

        return redirect()->route('providers.products.index', $provider->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($provider_id, $product_id, Request $request)
    {
        $product = Product::find($product_id);
        $provider = Provider::find($provider_id);

        $product->delete();

        return redirect()->route('providers.products.index', $provider->id);
    }
}
