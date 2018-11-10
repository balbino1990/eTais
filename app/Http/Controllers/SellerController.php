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

    public function store()
    {
        Product::create([
            'name' => request('name'),
            'price' => request('price'),
            'list_price' => request('list_price'),
            'desc' => request('desc'),
            'image' => request('image'),
            'category_id' => request('category_id'),
            'user_id' => request('user_id')
        ]);
        
        return Redirect::to('seller/index');
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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

