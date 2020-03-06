<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(category::class, function (Faker $faker) {

        $name = $faker->word();
return [
    'name' => $name,
    'slug' => Str::slug($name),

    ];
});
