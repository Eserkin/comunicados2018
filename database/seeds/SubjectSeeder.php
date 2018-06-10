<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Comunicados\Subject::class, 50)->create();
    }
}
