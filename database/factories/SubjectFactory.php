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
$factory->define(Comunicados\Subject::class, function (Faker\Generator $faker) {

    return [
    	'titulo'=>$faker->randomElement($array = array ('Matemática', 'Lengua', 'Ciencias Naturales', 'Ciencias Sociales', 'Música', 'Informática', 'Inglés', 'Ed. física')) ,
    	'profesor'=>$faker->randomElement($array = array ('25600951','27723208','28210268','31789457','34869444','36013877','38353549','14567834','25600951','27723208','34869444','36013877','36259443')) ,
		'dia_cursada'=>$faker->randomElement($array = array ('Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes')) ,
		'hora_cursada'=>$faker->time($format = 'H:i:s', $max = 'now'),
		'escuela_id'=>$faker->numberBetween($min = 1 , $max = 51),
    ];
});

