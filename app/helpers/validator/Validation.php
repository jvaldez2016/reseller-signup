<?php
namespace App\helpers\validator;
Validator::extend('alpha_spaces', function($attribute, $value)
{
    return preg_match('/^[\pL\s]+$/u', $value);
});
/*
|--------------------------------------------------------------------------
| Custom Validation Rules
|--------------------------------------------------------------------------
|
| Custom rules created in app/validators.php
|
*/

