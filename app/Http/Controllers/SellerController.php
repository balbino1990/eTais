<?php

namespace App\Http\Controllers;

use Redirect;
use Illuminate\Http\Request;
use App\Product;
use App\User;
use App\Category;

class SellerController extends Controller
{

    public function index(){
        $products = Product::all();
        return view('seller.index')->with('products', $products);
    }

    public function create()
    {
        $users = User::all();
        $categories = Category::all();
        return view('seller.create', compact('users', 'categories'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'price' => 'required',
            'list_price' => 'required',
            'desc' => 'required',
            'image' => 'required',
            'category_id' => 'required' 
        ]);

        Product::create([
            'name' => request('name'),
            'price' => request('price'),
            'list_price' => request('list_price'),
            'desc' => request('desc'),
            'image' => request('image'),
            'category_id' => request('category_id'),
            'user_id' => request('user_id')
        ]);
        
        return Redirect::to('seller')->with('success', 'Tais aumenta tiha ona ba loja');
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::where('id', $id)->first(); 
        return view('seller.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::all();
        return view('seller.edit', compact('product', 'categories'));
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
        
        $this->validate($request, [
            'name' => 'required',
            'price' => 'required',
            'list_price' => 'required',
            'desc' => 'required',
            'image' => 'required',
            'category_id' => 'required' 
        ]);
        
        
         $product = Product::find($id);
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->list_price = $request->input('list_price');
        $product->category_id = $request->input('category_id');
        $product->desc = $request->input('desc');
        $product->image = $request->input('image');
        //$product->user_id = $request->select('user_id');
        $product->save();
        
       
        return Redirect::to('seller')->with("success", "Tais atualiza tiha ona iha loja");
        //return "ola mundio";
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

