<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Product;
use App\Reseller;


class ResellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resellers = Reseller::all();

        return view('resellers.index', ['resellers' => $resellers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $reseller = new Reseller();

        return view('resellers.create', ['reseller' => $reseller, 'user_id' => Auth::id()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reseller = new Reseller();

        $reseller->fill($request->all());
        $reseller->save();

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
        $reseller = Reseller::find($id);

        return view('resellers.edit', ['reseller' => $reseller, 'user_id' => Auth::id()]);
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
        $reseller = Reseller::find($id);

        $reseller->fill($request->all());
        $reseller->save();

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
        $reseller = Reseller::find($id);

        // Primeiro deleta os produtos
        foreach($reseller->products as $product){
            $product->delete();
        }

        $reseller->delete();

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
        $reseller = Reseller::find($id);

        return view('resellers.products', ['reseller' => $reseller]);
//        }
    }
}
