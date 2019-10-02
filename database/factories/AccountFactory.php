<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Account;
use Faker\Generator as Faker;

$factory->define(Account::class, function (Faker $faker) {
    $max_id = \App\Person::all()->last()->id;
    return [
        'account' => $faker->bankAccountNumber,
        'person_id' => rand(1, $max_id),
    ];
});
