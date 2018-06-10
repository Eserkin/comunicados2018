<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Comunicados\Student::class, 18)->create();
    }
}
