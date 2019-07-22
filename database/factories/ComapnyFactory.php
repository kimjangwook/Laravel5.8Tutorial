<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Company;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Company::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'phone' => $faker->phoneNumber,
    ];
});
