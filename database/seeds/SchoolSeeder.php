<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	factory(Comunicados\School::class, 50)->create();
    }
}
