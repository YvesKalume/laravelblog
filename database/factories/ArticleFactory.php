<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        "title"=>$faker->text('10'),
        "content"=>$faker->text('100'),
        "category_id"=>$faker->numberBetween(1,3),
        "user_id"=>1,
        "image"=>$faker->imageUrl()
    ];
});
