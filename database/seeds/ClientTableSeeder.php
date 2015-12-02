<?php

use Illuminate\Database\Seeder;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \TesteLaravel\Models\Client::truncate();
		factory(\TesteLaravel\Models\Client::class , 10)->create();
    }
}
