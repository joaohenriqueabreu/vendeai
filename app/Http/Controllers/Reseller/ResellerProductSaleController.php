<?php

namespace App\Http\Controllers\Reseller;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Reseller;
use App\Product;
use App\Sale;
use App\Customer;
use App\Destination;

use Illuminate\Support\Facades\Auth;

class ResellerProductSaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $reseller_id, $product_id)
    {
        $reseller = Reseller::find($reseller_id);
        $product = Product::find($product_id);
        $sale = new Sale();
        $user = Auth::user();

        return view('resellers.sales.create', array('reseller' => $reseller, 'product' => $product, 'user' => $user, 'sale' => $sale));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $reseller_id, $product_id)
    {
        $reseller = Reseller::find($reseller_id);
        $product = Product::find($product_id);

        $sale = new Sale();
        $sale->fill($request->all());
        $sale->save();

        $customer = new Customer();
        $customer->fill($request->customer);
        $customer->save();

        $destination = new Destination();
        $destination->fill($request->destination);
        $destination->save();

        $sale->reseller()->associate($reseller);
        $sale->product()->associate($product);
        $sale->customer()->associate($customer);
        $sale->destination()->associate($destination);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
