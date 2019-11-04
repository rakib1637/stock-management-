<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product_list = Products::all();
        return view('Products/add_product')->with('product_list', $product_list);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'imei' => 'required|unique:products',
            'mac' => 'required'
        ]);

        $products = new Products;
        $products->name = $request->input('name');
        $products->imei = $request->input('imei');
        $products->mac = $request->input('mac');

        if($request->input('name') == "TK103"){
            $products->product_type_id = "1";
        }else if($request->input('name') == "VT600"){
            $products->product_type_id = "1";
        }else if($request->input('name') == "VT202"){
            $products->product_type_id = "2";
        }else if($request->input('name') == "OBD2"){
            $products->product_type_id = "1";
        }else if($request->input('name') == "WETRACK2"){
            $products->product_type_id = "2";
        }

        $products->save();
        return redirect('/product')->with('success', 'Product Added for '.$products->name );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = Products::find($id);
        return view('Products.edit')->with('products', $products);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'imei' => 'required',
            'mac' => 'required'
        ]);


        $products = Products::find($id);
        $products->name = $request->input('name');
        $products->imei = $request->input('imei');
        $products->mac = $request->input('mac');

        if($request->input('name') == "TK103"){
            $products->product_type_id = "1";
        }else if($request->input('name') == "VT600"){
            $products->product_type_id = "1";
        }else if($request->input('name') == "VT202"){
            $products->product_type_id = "2";
        }else if($request->input('name') == "OBD2"){
            $products->product_type_id = "1";
        }else if($request->input('name') == "WETRACK2"){
            $products->product_type_id = "2";
        }

        $products->save();
        return redirect('/product')->with('success', 'Product Updated for '.$products->name );

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Products::find($id);

        $product->delete();
        return redirect('/product')->with('success', 'Product Removed');
    }
}
