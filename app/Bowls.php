<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bowls extends Model
{
    protected $table = 'bowls';
    protected $fillable = ['name', 'type', 'price', 'specs', 'description'];

    public function ingredients()
    {
        return $this->belongsToMany('App\Ingredients', 'bowls_ingredients')->withTimestamps();
    }
}
