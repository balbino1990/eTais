<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //Os dados que vai ser prenchido
    protected $fillable = ['name', 'price', 'list_price', 'desc', 'image', 'user_id', 'category_id'];
}
