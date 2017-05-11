<?php

namespace App\Http\Controllers\Reseller;

use App\Category;
use App\Product;
use App\Reseller;
use App\Provider;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class ResellerProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $reseller_id)
    {
        $reseller = Reseller::find($reseller_id);

        return view('resellers.products.index', ['reseller' => $reseller]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function match($reseller_id, $product_id, Request $request)
    {
        $reseller = Reseller::find($reseller_id);
        $product = Product::find($product_id);

        // Se já existe faz um detach, senão attach
        if ($product->hasReseller($reseller->id))
            $product->resellers()->detach($reseller_id);
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//    public function show($reseller_id, $product_id)
//    {
//        $product = Product::find($product_id);
//        $reseller = Reseller::find($reseller_id);

//        return view('resellers.products.show', ['product' => $product, 'reseller' => $reseller]);
//    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function unmatch(Request $request, $reseller_id, $product_id)
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

    public function search(Request $request, $reseller_id, $q = null)
    {
        $query_text = "";
        if(!isset($q)){
            if(isset($request->q)){
                $query_text = $request->q;
            }
        } else {
            $query_text = $q;
        }

        if($query_text == "new")
            return $this->searchNew($request, $reseller_id);

        if($query_text == "reset")
            return $this->searchReset($request, $reseller_id);

        $reseller = Reseller::find($reseller_id);

        // Inicializa a query
        $query = Product::whereRaw('1');

        if (isset($query_text) && $query_text != "0") {
            $query->where('name', 'like', '%' . $query_text . '%')->orWhere('description', 'like', '%' . $query_text . '%');
        }

//        $products = $query->paginate(16);
//        $categories = Category::orderBy('name')->get();

        return $this->searchResults($request, $query, $reseller_id);
//        return view('resellers.products.search', ['reseller' => $reseller, 'query' => $query_text, 'products' => $products, 'categories' => $categories]);
    }

    public function searchReset(Request $request, $id)
    {
        $query = Product::whereRaw("1");

        return $this->searchResults($request, $query, $id);
    }

    public function searchNew(Request $request, $id)
    {
        $reseller = Reseller::find($id);
        $not_assigned = $reseller->products()->pluck('product_id')->toArray();

        $query = Product::whereNotIn('id', $not_assigned);

        return $this->searchResults($request, $query, $reseller);
    }

    public function searchCategory(Request $request, $reseller_id, $category_id)
    {
        /// Busca pelos produtos da categoria
        $query = Product::where('category_id','=', $category_id);

        return $this->searchResults($request, $query, $reseller_id);

    }

    public function searchResults(Request $request, $query, $reseller_id)
    {
        $reseller = Reseller::find($reseller_id);
        $products = $query->paginate(6);
        $categories = Category::orderBy('name')->get();

        return view('resellers.products.search', ['reseller' => $reseller, 'products' => $products, 'categories' => $categories]);
    }
}
