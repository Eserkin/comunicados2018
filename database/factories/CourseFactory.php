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
$factory->define(Comunicados\Course::class, function (Faker\Generator $faker) {

    return [
		'grado'=>$faker->randomElement($array = array ('primero', 'segundo', 'tercero', 'cuarto', 'quinto', 'sexto')) ,
		'nivel'=>$faker->randomElement($array = array ('primaria', 'secundaria')) ,
		'turno'=>$faker->randomElement($array = array ('mañana', 'tarde')) ,
		'aula'=>$faker->numberBetween($min = 1 , $max = 250),

    ];
});