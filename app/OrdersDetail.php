<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrdersDetail extends Model
{

    protected $table = 'orders_detail';
    public function orders()
    {
        // return $this->belongsTo(Orders::class);
        return $this->belongsTo('App\Orders', 'order_id');
        
    }
}
