<?php

use Illuminate\Database\Seeder;

class IngredientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('ingredients')->insert([
            'name' => str_random(10),
            'email' => str_random(10) . '@gmail.com',
            'password' => bcrypt('secret'),
        ]);
    }
}
