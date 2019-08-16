<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    $categoryList = \App\Category::all();
    $countCategoryList = count($categoryList);

    return [
        'title' => $faker->title,
        'body' => $faker->paragraph,
        'category_id' => \App\Category::all()->random(1)->first()->id,
    ];
});
