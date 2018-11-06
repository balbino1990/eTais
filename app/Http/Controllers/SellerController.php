<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\User;

class SellerController extends Controller
{
    public function create()
    {
        $users = User::all();
        return view('seller.create', compact('users'));
    }

    public function store()
    {
        Product::create([
            'name' => request('name'),
            'price' => request('price'),
            'list_price' => request('list_price'),
            'desc' => request('desc'),
            'image' => request('image'),
            'user_id' => request('user_id')
        ]);
    }
}
