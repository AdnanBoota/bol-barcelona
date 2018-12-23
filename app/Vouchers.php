<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vouchers extends Model
{
    protected $table = 'vouchers';

    protected $fillable = ['name', 'description', 'start_date', 'end_date', 'value'];

}
