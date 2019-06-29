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
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
