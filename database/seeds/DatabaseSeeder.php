<?php

use Illuminate\Database\Seeder;
use App\CustomIngredients;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(IngredientsTableSeeder::class);
        $this->call(BowlsTableSeeder::class);
        $this->call(CustomIngredientTableSeeder::class);
        $this->call(VoucherCodeTableSeeder::class);

    }
}
