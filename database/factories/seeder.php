<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$user = $factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'completed' => 1,
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});

$factory->define(App\UserDetail::class, function ($faker) {
    return [
        'first_name' => $faker->name,
        'middle_name' => $faker->name,
        'last_name' => $faker->name,
        'home_address' => $faker->address,
        'shipping_adress' =>$faker->address,
        'land_line_number' => $faker-> Str::random(10),
        'mobile_number' => $faker->Str::random(10),
        'facebook_name' => $faker->Str::random(10),
        'facebook_url' => $faker->Str::random(10),
        'instgram_account' => $faker->Str::random(10),
        'user_id' =>$user

    ];
});
    $factory->define(App\UserDetail::class, function ($faker) {
        return [
            'product_user_since' => $faker->name,
            'middle_name' => $faker->name,
            'last_name' => $faker->name,
            'home_address' => $faker->address,
            'shipping_adress' =>$faker->address,
            'land_line_number' => $faker-> Str::random(10),
            'mobile_number' => $faker->Str::random(10),
            'facebook_name' => $faker->Str::random(10),
            'facebook_url' => $faker->Str::random(10),
            'instgram_account' => $faker->Str::random(10),
            'user_id' =>$user

        ];
});
