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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reseller = new Reseller();

        $reseller->fill($request->all());
        $reseller->save();

        return redirect()->route('resellers.products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('products.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
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
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
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
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $reseller = Reseller::find($id);

        // Primeiro deleta os produtos
        foreach ($reseller->products as $product) {
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

    public function requestStore($reseller_id)
    {
        $reseller = Reseller::find($reseller_id);
        $user = Auth::user();

        if(MailController::storeNotification($reseller_id, 'new'))
            return redirect()->route('resellers.stores.requested', $reseller->id);
        else
            return redirect()->route('resellers.products.index', $reseller->id);
    }

    public function updateStore($reseller_id)
    {
        $reseller = Reseller::find($reseller_id);
        $user = Auth::user();

        if(MailController::storeNotification($reseller_id, 'update'))
            return redirect()->route('resellers.stores.updated', $reseller->id);
        else
            return redirect()->route('resellers.products.index', $reseller->id);
    }

    public function storeRequested($reseller_id)
    {
        $reseller = Reseller::find($reseller_id);
        $user = Auth::user();

        return view('resellers.stores.requested', array('reseller' => $reseller, 'user' => $user));
    }

    public function storeUpdated($reseller_id)
    {
        $reseller = Reseller::find($reseller_id);
        $user = Auth::user();

        return view('resellers.stores.updated', array('reseller' => $reseller, 'user' => $user));
    }

    public function storeInfo($reseller_id)
    {
        $reseller = Reseller::find($reseller_id);
        $user = Auth::user();

        return view('resellers.stores.info', array('reseller' => $reseller, 'user' => $user));
    }
}
