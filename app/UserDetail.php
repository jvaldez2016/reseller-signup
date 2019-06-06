<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    protected $fillable = [
        'first_name',
        'nick_name',
        'middle_name',
        'last_name',
        'birth_date',
        'gender',
        'land_line_number',
        'mobile_number',
        'lazada_account',
        'instagram_account',
        'facebook_name',
        'facebook_url',
        'home_address',
        'shipping_address',
        'up_line',
        'referrer',
        'user_id'
    ];
}
