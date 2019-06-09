<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    protected $fillable= [
        'name',
        'category',
        'suggested_retail_price',
        'reseller',
        'distributor',
        'mega_distributor'
    ];
}
