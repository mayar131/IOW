<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'name', 'cost','size','color','type','delivery_date','shipping_adrees','user_id',
    ];
}
