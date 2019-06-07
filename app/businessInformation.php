<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class businessInformation extends Model
{
    protected $fillable=[
        'product_user_since',
        'name_of_referrer',
        'existing_business',
        'existing_business_address',
        'dti_number',
        'tin_number',
        'facebook',
        'instagram',
        'lazada',
        'shopee',
        'personalcontacts',
        'existingbusiness',
        'others',
        'facebook_business_account',
        'facebook_business_url',
        'instragram_business_account',
        'lazada_account',
        'shopee_account',
        'user_id'
    ];
}
