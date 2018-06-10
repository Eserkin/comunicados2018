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
$factory->define(Comunicados\School::class, function (Faker\Generator $faker) {

    return [
        'modalidad' =>$faker->randomElement($array = array ('Educación Artística', 'Educación Especial', 'Educación Permanente de Jóvenes y Adultos', 'Educación Rural', 'Educación Técnico Profesional','Educación Intercultural Bilingüe')),
        'nivel' =>$faker->randomElement($array = array ('primario', 'secundario')) ,
        'numero' =>$faker->unique()->numberBetween($min = 10 , $max = 499),
        'nombre' =>$faker->company,
        'direccion' => $faker->secondaryAddress,
        'localidad' => $faker->randomElement($array = array ('Ramos Mejía', 'San Justo', 'Moron', 'La Plata', 'Liniers', 'Rosario', 'Bella Vista')) ,
        'provincia' => $faker->randomElement($array = array ('Buenos Aires', 'Formosa', 'San Luis', 'Catamarca', 'La Pampa', 'La Rioja', 'Santa Fe', 'Córdoba')) ,  
        'telefono' => $faker->numberBetween($min = 40000000 , $max = 49999999),
        'fax' => $faker->numberBetween($min = 50000000 , $max = 59999999),
        'email' => $faker->unique()->safeEmail,
        'pagina_web' =>$faker->unique()->url,
    ];
});