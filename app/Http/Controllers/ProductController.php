<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display
     */
    public function index()
    {
        return Product::get();
    }

    /**
     * Show 
     */
    public function store(Request $request)
    {
        return Product::create($request->all());
    }

    /**
     * Display specified ID
     */
    public function show($id)
    {
        return Product::find($id);
    }

    /**
     * Update
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->update($request->all());
        return $product;
    }

    /**
     * Remove
     */
    public function destroy(string $id)
    {
        return Product::destroy($id);
    }
}