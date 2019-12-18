<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Formation;
use Faker\Generator as Faker;

$factory->define(App\Formation::class, function (Faker $faker) {
    return ['nomformation' => $faker->paragraph, 'datedebut' => $faker->dateTimeThisYear,
        'duree' => $faker->numberBetween(1, 500),
        'unite' => $faker->text(10)
       ];
});
