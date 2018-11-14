<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::all();
        
        return view('product.index')->with('product', $product);
    }

    public function details($id)
    {
        $product = Product::where('id', $id)->first(); 
        return view('product.details', compact('product'));
    }
}
