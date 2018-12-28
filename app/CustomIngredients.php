<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomIngredients extends Model
{
    protected $table = 'custom_ingredients';
    protected $fillable = ['name', 'category', 'price', 'qty_free', 'description'];
}
