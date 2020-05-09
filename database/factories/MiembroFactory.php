<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Miembros;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Miembros::class, function (Faker $faker) {
    return [
        'Nombre' => $faker->name,
        'Apellido_Pat' => $faker->name,
        'Apellido_Mat' => $faker->name,
        'Consumo' => $faker->numberBetween(199,4999),
        'Puntos_Gastados' => $faker->numberBetween(199,499),
        'Correo' => $faker->unique()->safeEmail,
        'Password' => '1234'
    ];
});
