<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Comunicados\Course::class, 10)->create();
    }
}
