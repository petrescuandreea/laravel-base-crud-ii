<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {
    return [
        
        'name' => $faker -> firstName(),
        'lastname' => $faker -> lastName(),
        'date_of_birth' => $faker -> date(),
        'username' => $faker -> userName(),
        'email' => $faker -> email(),
        'password' => $faker -> password(8, 16),
    ];
});
