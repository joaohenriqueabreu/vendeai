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

        return redirect()->route('products.index');
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

    public function search(Request $request, $id)
    {
        $reseller = Reseller::find($id);

        // Inicializa a query
        $query = Product::whereRaw('1');

        if (isset($request->q)) {
            $query->where('name', 'like', '%' . $request->q . '%')->orWhere('description', 'like', '%' . $request->q . '%');
        }

        $products = $query->paginate(16);

        return view('resellers.products.search', ['reseller' => $reseller, 'products' => $products]);
    }

    public function searchReset(Request $request, $id)
    {
        $reseller = Reseller::find($id);

        $products = Product::paginate(16);

        return view('resellers.products.search', ['reseller' => $reseller, 'products' => $products]);
    }

    public function searchNew(Request $request, $id)
    {
        $reseller = Reseller::find($id);

        $not_assigned = $reseller->products()->pluck('product_id')->toArray();

        // Inicializa a query
        $query = Product::whereNotIn('id', $not_assigned);

        $products = $query->paginate(16);

        return view('resellers.products.search', ['reseller' => $reseller, 'products' => $products]);
    }

    public function match($reseller_id, $product_id, Request $request)
    {
        $reseller = Reseller::find($reseller_id);
        $product = Product::find($product_id);

        // Se já existe faz um detach, senão attach
        if ($product->hasReseller($reseller->id))
            return $this->unmatch($reseller_id, $product_id, $request);
        else
            $product->resellers()->attach($reseller_id);


        // Inicializa a query
        $query = Product::whereRaw('1');

        if (isset($request->q)) {
            $query->where('name', 'like', '%' . $request->q . '%')->orWhere('description', 'like', '%' . $request->q . '%');
        }

        $products = $query->paginate(16);
        return redirect()->route('resellers.products.search', ['reseller' => $reseller, 'products' => $products]);
    }

    public function unmatch($reseller_id, $product_id, Request $request)
    {
        $reseller = Reseller::find($reseller_id);
        $product = Product::find($product_id);

        // Se já existe faz um attach, senão attach
        if ($product->hasReseller($reseller->id))
            $product->resellers()->detach($reseller_id);
        else
            return $this->match($reseller_id, $product_id, $request);

        // Inicializa a query
        $query = Product::whereRaw('1');

        if (isset($request->q)) {
            $query->where('name', 'like', '%' . $request->q . '%')->orWhere('description', 'like', '%' . $request->q . '%');
        }

        $products = $query->paginate(16);
        return redirect()->route('resellers.products.search', ['reseller' => $reseller, 'products' => $products]);
    }
}
