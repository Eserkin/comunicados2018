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
$factory->define(Comunicados\Message::class, function (Faker\Generator $faker) {

    return [
        'asunto' => $faker->text($maxNbChars = 80) ,
        'mensaje' => $faker->text($maxNbChars = 240) ,
        'mensaje_padre_id' => $faker->numberBetween($min = 1 , $max = 40),
        'mensaje_tipo_id' => $faker->numberBetween($min = 1 , $max = 4),
        'user_envia' => $faker->randomElement($array = array ('33247459','33473119','33769925','34246240','34996571','35888974','36295193','36773726','38146895','10580881','25616127','26310659','27581130','27585342','28249639','30266025','30709798','30725613','31462260','32704909','33173727','33252721','34088611','36390173','36564793','36668518','37393168','37797071','37961840','38467797','38581317')) ,
        'escuela_id' => $faker->numberBetween($min = 1 , $max = 25),
        'fecha_creacion' => $faker->date($format = 'Y-m-d', $max = 'now'),
    ];
});