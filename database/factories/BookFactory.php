<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Book;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    return [
        'title' => $faker->streetName,
        'synopsis' => $faker->sentence,
        'published_at' => $faker->date,
    ];
});
