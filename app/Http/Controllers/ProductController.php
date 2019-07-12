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

    public function show( $product_id)
    {
        $product = Product::find($product_id);
        // se il prodotto non esiste quindi è vuoto
        // reindirizzo ad una pagina 404
        if (empty($product)) {
          abort(404);
        }
        return view('products.show', compact('product'));
    }


    public function edit($product_id)
    {
      $product = Product::find($product_id);
      // se il prodotto non esiste quindi è vuoto
      // reindirizzo ad una pagina 404
      if (empty($product)) {
        abort(404);
      }
      return view('products.edit', compact('product'));
    }


    public function update(Request $request,  $product)
    {

    }


    public function destroy(Product $product)
    {
        //
    }
}
