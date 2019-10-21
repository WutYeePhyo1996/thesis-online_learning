<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Classes;
use Faker\Generator as Faker;

$factory->define(Classes::class, function (Faker $faker) {
    return [
        'year' => $faker->randomElements(['1BE-IT','2BE-IT','3BE-IT','4BE-IT','VIBE-IT'])
    ];
});
