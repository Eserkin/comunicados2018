<?php

/*
|--------------------------------------------------------------------------
| Student Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Comunicados\StudentParent::class, function (Faker\Generator $faker) {

    return [  
    	'alumno_id' => $faker->randomElement($array = array ('20456732','26031051','26982512','27214037','28152998','29578561','32238237','32267202','33213897','33247459','33473119','33769925','34246240','34996571','35888974','36295193','36773726','38146895')) ,
    	'padre_id' => $faker->randomElement($array = array ('10580881','25616127','26310659','27581130','27585342','28249639','30266025','30709798','30725613','31462260','32704909','33173727','33252721','34088611','36390173','36564793','36668518','37393168','37797071','37961840','38467797','38581317')) ,
    	 
    ];
});