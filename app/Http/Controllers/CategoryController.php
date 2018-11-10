<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function layouts()
    {
        $categories = Category::all();
        return view('layouts.app')->with('categories', $categories);
    }
}
