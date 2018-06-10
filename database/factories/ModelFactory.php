<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Comunicados\User::class, function (Faker\Generator $faker) {

    return [
    	'dni' => $faker->unique()->numberBetween($min = 25000000 , $max = 38999999),
        'nombre' => $faker->firstName,
        'apellido' => $faker->lastName,
        'sexo' => $faker->randomElement($array = array ('masculino', 'femenino')) ,
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt('123456'),
        'fecha_nacimiento' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'telefono' => $faker->numberBetween($min = 40000000 , $max = 49999999),
        'celular' => $faker->numberBetween($min = 1500000000 , $max = 1599999999),
        'direccion' => $faker->secondaryAddress,
        'localidad' => $faker->randomElement($array = array ('Ramos Mejía', 'San Justo', 'Moron', 'La Plata', 'Liniers', 'Rosario', 'Bella Vista')) ,
        'provincia' => $faker->randomElement($array = array ('Buenos Aires', 'Formosa', 'San Luis', 'Catamarca', 'La Pampa', 'La Rioja', 'Santa Fe', 'Córdoba')) ,       
        'foto_url' =>$faker->imageUrl($width = 640, $height = 480) ,
        'tipo'=> $faker->randomElement($array = array ('tutor', 'personal', 'alumno')) ,
        'remember_token'=>str_random(10),
    ];
});
