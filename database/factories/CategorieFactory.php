<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Categorie;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Categorie::class, function (Faker $faker) {
    $nom = $faker->unique()->word;
    return [
        'nom' => $nom,
        'slug' => Str::slug($nom),
    ];
});
