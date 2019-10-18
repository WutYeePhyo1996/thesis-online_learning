<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use Faker\Generator as Faker;

$factory->define(App\Assignment::class, function (Faker $faker) {
    return [
        'class_id' => $faker->numberBetween(1,6),
        'file' => 'the-basics-of-ux-design.pdf'
    ];
});
