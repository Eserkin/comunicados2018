<?php

use Illuminate\Database\Seeder;

class StaffRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Comunicados\StaffRole::class, 20)->create();    
    }
}
