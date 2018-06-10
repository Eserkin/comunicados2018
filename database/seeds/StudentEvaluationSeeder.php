<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class StudentEvaluationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Comunicados\StudentEvaluation::class, 180)->create();
    }
}
