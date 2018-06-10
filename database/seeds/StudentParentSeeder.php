<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class StudentParentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Comunicados\StudentParent::class, 25)->create();
    }
}
