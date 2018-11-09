<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\User;
use App\Category;

class SellerController extends Controller
{
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
    }
}
