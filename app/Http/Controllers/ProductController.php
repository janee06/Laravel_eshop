<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{

     // Method to show all products on the products index page
   

    public function index()
    {
         // Fetch all products from the database
         $products = Product::all();
 
         // Pass the products to the view named 'products.index'
         return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
      public function show($id)
            {
                   $product = Product::findOrFail($id);

                // Get related products (you can adjust the logic to suit your needs)
                    $relatedProducts = Product::where('id', '!=', $product->id)
                    ->inRandomOrder()
                    ->take(10)
                    ->get();


                // Předá produkt do view
                return view('products.show', compact('product','relatedProducts'));
            }
    public function search(Request $request)
        {
            $query = $request->input('query');
            $products = Product::where('name', 'LIKE', "%{$query}%")->get();
            return view('products.index', compact('products'));
        }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}