<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=['name', 'description', 'price', 'category', 'sale_price'];
}
