<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Designer extends Model
{
    protected $fillable = [
        'name','email','Address','Phone','salary','final_design','visa'
    ];
}
