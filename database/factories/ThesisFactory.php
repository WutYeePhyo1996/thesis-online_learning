<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Thesis;
use Faker\Generator as Faker;

$factory->define(Thesis::class, function (Faker $faker) {
    return [
        'title' => $faker->word(),
        'author' => $faker->name(),
        'academic_year' => '2018',
        'rollno' => $faker->randomDigit(),
        'abstract' => $faker->paragraph(),
        'file' => 'defaulthesis.pdf'
    ];
});
