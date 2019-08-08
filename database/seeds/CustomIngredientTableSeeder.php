<?php

use Illuminate\Database\Seeder;
use App\CustomIngredients;

class CustomIngredientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        $custom_ingredients=[
            0 => [
                'name' => 'tofu',
                'category' => 'main-components',
                'price' => 1,
                'qty_free' => 3,
                'description' => '',
            ],
            1 => [
                'name' => 'temphé',
                'category' => 'main-components',
                'price' => 2,
                'qty_free' => 2,
                'description' => '',
            ],
            2 => [
                'name' => 'salmon',
                'category' => 'main-components',
                'price' => 2,
                'qty_free' => 4,
                'description' => '',
            ],
            3 => [
                'name' => 'pollo',
                'category' => 'main-components',
                'price' => 1.5,
                'qty_free' => 2,
                'description' => '',
            ],
            4 => [
                'name' => 'Huevo',
                'category' => 'main-components',
                'price' => 1,
                'qty_free' => 1,
                'description' => '',
            ],
            5 => [
                'name' => 'Aguacate',
                'category' => 'main-components',
                'price' => 1,
                'qty_free' => 3,
                'description' => '',
            ],
            6 => [
                'name' => 'sesam',
                'category' => 'tuner',
                'price' => 1,
                'qty_free' => 3,
                'description' => '',
            ],
            7 => [
                'name' => 'parmesan chips',
                'category' => 'tuner',
                'price' => 0.75,
                'qty_free' => 2,
                'description' => '',
            ],
            8 => [
                'name' => 'mais salsa',
                'category' => 'tuner',
                'price' => 0.75,
                'qty_free' => 4,
                'description' => '',
            ],
            9 => [
                'name' => 'granatapeel',
                'category' => 'tuner',
                'price' => 0.75,
                'qty_free' => 4,
                'description' => '',
            ],
            10 => [
                'name' => 'minze',
                'category' => 'tuner',
                'price' => 0.75,
                'qty_free' => 4,
                'description' => '',
            ],
            11 => [
                'name' => 'feta',
                'category' => 'tuner',
                'price' => 0.75,
                'qty_free' => 3,
                'description' => '',
            ],
            12 => [
                'name' => 'hot mayo',
                'category' => 'dressing',
                'price' => 0.75,
                'qty_free' => 3,
                'description' => '',
            ],
            13 => [
                'name' => 'tahini dressing',
                'category' => 'dressing',
                'price' => 0.75,
                'qty_free' => 2,
                'description' => '',
            ],
            14 => [
                'name' => 'yuzu dressing',
                'category' => 'dressing',
                'price' => 0.75,
                'qty_free' => 1,
                'description' => '',
            ],
            15 => [
                'name' => 'pesto dressing',
                'category' => 'dressing',
                'price' => 0.75,
                'qty_free' => 1,
                'description' => '',
            ],
            16 => [
                'name' => 'thai dressing',
                'category' => 'dressing',
                'price' => 0.75,
                'qty_free' => 3,
                'description' => '',
            ],
            17 => [
                'name' => 'chipotle sauce',
                'category' => 'dressing',
                'price' => 0.75,
                'qty_free' => 2,
                'description' => '',
            ],
            18 => [
                'name' => 'avocado',
                'category' => 'top-ups',
                'price' => 2.75,
                'qty_free' => 0,
                'description' => '',
            ],
            19 => [
                'name' => 'bbq tofu',
                'category' => 'top-ups',
                'price' => 2.75,
                'qty_free' => 1,
                'description' => '',
            ],
            20 => [
                'name' => 'grilled pita',
                'category' => 'top-ups',
                'price' => 2.75,
                'qty_free' => 1,
                'description' => '',
            ],
            21 => [
                'name' => 'roasted chicken',
                'category' => 'top-ups',
                'price' => 3.75,
                'qty_free' => 1,
                'description' => '',
            ],
            22 => [
                'name' => 'organic egg',
                'category' => 'top-ups',
                'price' => 1.90,
                'qty_free' => 3,
                'description' => '',
            ],
            23 => [
                'name' => 'falafel',
                'category' => 'top-ups',
                'price' => 3.45,
                'qty_free' => 1,
                'description' => '',
            ],
            24 => [
                'name' => 'tomato meatballs',
                'category' => 'top-ups',
                'price' => 3.45,
                'qty_free' => 1,
                'description' => '',
            ],
        ];
        foreach($custom_ingredients as $ingredient){
            $custom_ingredient = CustomIngredients::create($ingredient);
        }
       
    }
}
