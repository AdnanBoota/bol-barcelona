<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BowlsIngredients extends Model
{
    protected $table = 'bowls_ingredients';
    protected $fillable = ['type', 'bowls_id', 'ingredients_id'];
}
