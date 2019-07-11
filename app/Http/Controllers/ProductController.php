<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products =Product::all();
        return view('products.index', compact('products'));
    }


    public function create()
    {
      return view('products.create');
    }


    public function store(Request $request)
    {
     // tramite il request vado a prendermi tutti i dati che mi passa la create
      $dati = $request->all();
      $new_product = new Product();
      // $new_product->name = $dati['name'];
      // $new_product->description = $dati['description'];
      // $new_product->category = $dati['category'];
      // $new_product->price = $dati['price'];
      // $new_product->sale_price = $dati['sale_price'];
      $new_product->fill($dati);
      $new_product->save();

      // posso far vedere la view del product store
      // return view('products.store');
    // oppure fare un redirect automatico alla index
      return redirect()->route('products.index');
    }

    public function show(Product $product)
    {
        //
    }


    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
