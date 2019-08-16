<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\OrdersDetail;

class Orders extends Model
{
    protected $table = 'orders';
    
    public function orders_detail()
    {
        return $this->hasMany('\App\OrdersDetail', 'order_id');
    }
}
