<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Cliente::class, function (Faker $faker) {
    $pessoas = [0 => 'fisica', 1 => 'juridica'];
    $cpfs = \App\Helpers\Funcoes::cpfs();
    return [
        'nome' => $faker->name,
        'documento' => $cpfs[array_rand($cpfs, 1)],
        'email' => $faker->email,
        'telefone' => $faker->phoneNumber,
        'inadimplente' => rand(0, 1),
        'pessoa' => $pessoas[rand(0, 1)]
    ];
});
