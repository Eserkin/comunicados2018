<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class StudentCourseSubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Comunicados\StudentCourseSubject::class, 100)->create();
    }
}
