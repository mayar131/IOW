<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Printer extends Model
{
    protected $fillable = [
     'name', 'email', 'address','Phone','salary'
  
    ];
}
