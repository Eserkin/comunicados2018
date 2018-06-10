<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Comunicados\Message::class, 100)->create();
    }
}
