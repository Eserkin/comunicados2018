<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class PersonalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        factory(Comunicados\SchoolStaff::class, 7)->create();
    }
}
