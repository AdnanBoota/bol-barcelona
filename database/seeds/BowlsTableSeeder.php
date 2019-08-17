<?php

use Illuminate\Database\Seeder;
use App\Bowls;
use App\Ingredients;
use App\BowlsIngredients;

class BowlsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    /**
     * DB table name
     *
     * @var string
     */
    protected $table;

    /**
     * CSV filename
     *
     * @var string
     */
    protected $filename;
    public function __construct()
    {

        $this->table = 'Bowls';
        // $this->filename = base_path('database/csv/bowls.csv');
    }
    public function run()
    {
        $bowls = [
            0 => [
                'name' => 'Açai berry bol',
                'type' => 'smoothie-bols',
                'price' => 8.50,
                'specs' => '["v", "fs", "sf"]',
                'images' => 'açai_bol',
                'description' => '',
                'ingredients_base' => ['Açai', 'arandanos', 'platano', 'zumo de manzana'],
                'ingredients_toppings' => ['Granola casera', 'fruta de temporada', 'polen', 'bayas de goji', 'coco deshitratado'],
            ],
            1 => [
                'name' => 'Pink pitaya bol',
                'type' => 'smoothie-bols',
                'price' => 8.50,
                'specs' => '["v", "fs", "sf"]',
                'images' => 'Pitaya',
                'description' => '',
                'ingredients_base' => ['Pitaya Roja', 'platano', 'fresas', 'zumo de manzana'],
                'ingredients_toppings' => ['Granola casera', 'fruta de temporada', 'polen', 'coco deshitratado', 'semillas de chía'],
            ],
            2 => [
                'name' => 'Protein punch bol',
                'type' => 'brunch-bols',
                'price' => 7.50,
                'specs' => '["v","fs","sf"]',
                'images' => 'protien',
                'description' => '',
                'ingredients_base' => ['Porridge de chía', 'avena', 'mantequilla de mani', 'uvas pasas', 'leche de almendras', 'miel de agave'],
                'ingredients_toppings' => ['platano', 'nueces', 'polen', 'nibs de cacao', 'polen'],
            ],
            3 => [
                'name' => 'Berry vegan pancakes',
                'type' => 'brunch-bols',
                'price' => 8.50,
                'specs' => '["v","fs"]',
                'images' => 'berry',
                'description' => '',
                'ingredients_base' => ['Pancakes veganos con frutos rojos', 'coulis de frutos rojos', 'chantilly de pandan', 'granola casera', 'coco deshitratado'],
                'ingredients_toppings' => [],
            ],
            4 => [
                'name' => 'Mamma french toast',
                'type' => 'brunch-bols',
                'price' => 8.50,
                'specs' => '["v","fs"]',
                'images' => 'mama',
                'description' => '',
                'ingredients_base' => ['Tostada francesa horneada con crumbles de manzana', 'sirope de arce', 'caramelo casero', 'crunchy de avellanas y chocolate blanco', 'chantilly de pandan', 'fruta de temporada'],
                'ingredients_toppings' => [],
            ],
            5 => [
                'name' => 'Avocado Toast bol',
                'type' => 'brunch-bols',
                'price' => 8.50,
                'specs' => '["v","fs","h"]',
                'images' => 'avocado',
                'description' => '',
                'ingredients_base' => ['Pan ecológico', 'aguacate', 'huevo poché', 'espinacas baby', 'tomates cherry', 'feta', 'dukkah', 'salsa tahini'],
                'ingredients_toppings' => [],            ],
            6 => [
                'name' => 'Italian Toast bol',
                'type' => 'brunch-bols',
                'price' => 8.50,
                'specs' => '["v","fs","l"]',
                'images' => 'italian',
                'description' => '',
                'ingredients_base' => ['Pan ecológico', 'Burrata', 'rúcula', 'pesto casero', 'mix de almendras y pistachos'],
                'ingredients_toppings' => [],
            ],
            7 => [
                'name' => 'Eggs Benedict Waffle',
                'type' => 'brunch-bols',
                'price' => 9.50,
                'specs' => '["v","fs","l","h"]',
                'images' => 'eggs',
                'description' => '',
                'ingredients_base' => ['Waffles de curcuma', 'huevo poché', 'salsa holandesa', 'canónigos', 'daikon', 'dukkah'],
                'ingredients_toppings' => [],
            ],
            8 => [
                'name' => 'Greek parfait bol',
                'type' => 'brunch-bols',
                'price' => 7.50,
                'specs' => '["v","fs","l"]',
                'images' => 'greek',
                'description' => '',
                'ingredients_base' => ['Yogur griego', 'miel'],
                'ingredients_toppings' => ['Granola casera', 'bayas de goji', 'polen', 'nibs de cacao', 'frutas de temporada'],
            ],
            9 => [
                'name' => 'Cosmic Blue bol',
                'type' => 'smoothie-bols',
                'price' => 8.50,
                'specs' => '["v","ve","sf","fs"]',
                'images' => 'cosmic',
                'description' => '',
                'ingredients_base' => ['Espirulina azul', 'platano', 'melón', 'zumo de manzana'],
                'ingredients_toppings' => ['Granola casera', 'arandanos', 'nibs de cacao', 'coco'],
            ],
            10 => [
                'name' => 'Coco Mermaid bol',
                'type' => 'smoothie-bols',
                'price' => 8.50,
                'specs' => '["v","ve","sf","fs"]',
                'images' => 'coco',
                'description' => '',
                'ingredients_base' => ['Carne de coco', 'leche de coco', 'espirulina', 'melón'],
                'ingredients_toppings' => ['Granola casera', 'platano', 'kiwi', 'uvas', 'coco'],
            ],
            11 => [
                'name' => 'Azteca bol',
                'type' => 'quinoa-bols',
                'price' => 9.95,
                'specs' => '["v","gf","s"]',
                'images' => 'aztecka',
                'description' => '',
                'ingredients_base' => ['Quinoa', 'rúcula', 'boniato asado', 'maíz asado', 'pico de gallo', 'maíz crocante', 'totopos', 'guacamole', 'salsa mayo chipotle( salsa picante con mayo + chipotle + lima)'],
                'ingredients_toppings' => [],
            ],
            12 => [
                'name' => 'Greek goodness bol',
                'type' => 'quinoa-bols',
                'price' => 9.95,
                'specs' => '["v","gf","fs","l"]',
                'images' => 'greek_goodness',
                'description' => '',
                'ingredients_base' => ['Quinoa', 'rúcula', 'tomates cherry', 'alcachofa', 'olivas negras', 'pimientos asados', 'pepino', 'granada', 'queso feta', 'dukkah', 'hummus', 'tzatsiki ( salsa de yogourt, pepino & menta)'],
                'ingredients_toppings' => [],
            ],
            13 => [
                'name' => 'Super california bol',
                'type' => 'quinoa-bols',
                'price' => 9.95,
                'specs' => '["v","ve","fs","gf"]',
                'images' => 'super_california',
                'description' => '',
                'ingredients_base' => ['Quinoa', 'canónigos', 'boniato asado', 'remolacha', 'alcachofa', 'garbanzos', 'uvas', 'naranja', 'semillas de girasol caramelizadas', 'salsa miso tahini ( salsa con un toque dulce de agave + miso blanco + tahini)'],
                'ingredients_toppings' => [],
            ],
            14 => [
                'name' => 'Amazing poke bol',
                'type' => 'signature-bols',
                'price' => 11.95,
                'specs' => '["se","so","h","gl"]',
                'images' => 'poke',
                'description' => '',
                'ingredients_base' => ['Arroz de sushi', 'salmón', 'spicy mayo', 'mango', 'daikon', 'ensalada de algas y edamame', 'cebollitas crunchy', 'alga nori', 'salsa yuzu ponzu ( soja con un toque cítrico de yuzu )'],
                'ingredients_toppings' => [],
            ],
            15 => [
                'name' => 'Pretty thai bol',
                'type' => 'signature-bols',
                'price' => 10.95,
                'specs' => '["v","fs","s","se","so","c","gl"]',
                'images' => 'pretty_thai',
                'description' => '',
                'ingredients_base' => ['Soba noodles', 'tempeh caramlizado', 'brotes de soja', 'pepino', 'espinaca baby', 'papaya verde', 'papaya', 'Thai mix( cacahuetes + anacardos + cebollitas crispy + sesamo)', 'salsa', 'coco thai (salsa de curry + leche de coco)'],
                'ingredients_toppings' => [],
            ],
            16 => [
                'name' => 'Japanese Girl bol',
                'type' => 'signature-bols',
                'price' => 10.95,
                'specs' => '["v","ve","gf","fs"]',
                'images' => 'japanese',
                'description' => '',
                'ingredients_base' => ['Soba noodles', 'tofu yakitory', 'ensalada de algas y edamame', 'pepino', 'papaya', 'alga nori', 'sesamo', 'cebollitas crunchy', 'salsa yuzu ponzu ( soja con un toque cítrico de yuzu )'],
                'ingredients_toppings' => [],
            ],
        ];
        foreach ($bowls as $record) {
            $ingredients_base = $record['ingredients_base'];
            $ingredients_toppings = $record['ingredients_toppings'];
            unset($record['ingredients_base']);
            unset($record['ingredients_toppings']);
            $bowl = Bowls::create($record);
            $record['ingredients_base']= $ingredients_base;
            $record['ingredients_toppings']= $ingredients_toppings;
            $ingredient = Ingredients::whereIn('name', $record['ingredients_toppings'])->get();
            foreach ($ingredient as $toppings) {
                $bowl->ingredients()->attach($toppings->id);
            }
            $ingredient = Ingredients::whereIn('name', $record['ingredients_base'])->get();
            // dd($ingredient);
            foreach ($ingredient as $base) {
                // dd($base->id);
                $bowl->ingredients()->attach($base->id);
                BowlsIngredients::whereId($base->id)->update(['type'=>'base']);
               
            }
        
        }
    }
}
