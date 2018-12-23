<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredients extends Model
{
    protected $table = 'ingredients';
    protected $fillable = ['name', 'price', 'specs'];

    public function bowls()
    {
        return $this->belongsToMany('App\Bowls', 'bowls_ingredients');
    }
}
