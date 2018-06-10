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
$factory->define(Comunicados\SchoolStaff::class, function (Faker\Generator $faker) {
    
    return [
        'dni' => $faker->unique()->randomElement($array = array ('14567834','24567849','25600951','26919051','27723208','28176536','28210268','31789457','32718449','34869444','35246252','36013877','36259443','36306268','38353549','38989824')) ,
        'n_legajo'=>$faker->numberBetween($min = 10000000 , $max =1474836909080),
        'fecha_alta'=>'2017-06-23',
        'activo?'=>'1',
    ];
});