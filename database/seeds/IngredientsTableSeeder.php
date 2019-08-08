<?php

use Illuminate\Database\Seeder;

class IngredientsTableSeeder extends Seeder
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
    public function __construct(){

        $this->table = 'Ingredients';
        $this->filename = base_path('database/csv/ingredients.csv');

    }
    public function run()
    {
        DB::table($this->table)->delete();
        $seedData = $this->seedFromCSV($this->filename, ',');
        DB::table($this->table)->insert($seedData);
    }
       /**
     * Collect data from a given CSV file and return as array
     *
     * @param $filename
     * @param string $deliminator
     * @return array|bool
     */
    private function seedFromCSV($filename, $delimitor = ",")
    {
        if(!file_exists($filename) || !is_readable($filename))
        {
            return FALSE;
        }

        $header = NULL;
        $data = array();

        if(($handle = fopen($filename, 'r')) !== FALSE)
        {
            while(($row = fgetcsv($handle, 1000, $delimitor)) !== FALSE)
            {
                if(!$header) {
                    $header = $row;
                } else {
                    $data[] = array_combine($header, $row);
                }
            }
            fclose($handle);
        }

        return $data;
    }
}
