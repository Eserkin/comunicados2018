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
$factory->define(Comunicados\StaffRole::class, function (Faker\Generator $faker) {
    
    return [
        'dni' => $faker->randomElement($array = array ('25600951','26919051','27723208','28176536','28210268','32718449','34869444','36013877','36259443','36306268','38353549','38989824')),
        'rol_id'=>$faker->numberBetween($min = 2 , $max =5),
    ];
});