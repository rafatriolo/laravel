<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(TesteLaravel\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(TesteLaravel\Client\Models::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'responsable' => $faker->name,
        'email' => $faker->email,
        'phone' => $faker->phonenumber,
        'address' => $faker->address,
        'obs' => $faker->sentence
    ];
});


