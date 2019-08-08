<?php

use Illuminate\Database\Seeder;
use App\Vouchers;
class VoucherCodeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $vouchers=[
            0 => [
                'name' => 'VCH111',
                'description' => '',
                'start_date' => '2019-8-1',
                'end_date' => '2019-8-10',
                'value' => 0.50
            ],
            1 => [
                'name' => 'VCH123',
                'description' => '',
                'start_date' => '2019-7-25',
                'end_date' => '2019-8-25',
                'value' => 1.0
            ],
            2 => [
                'name' => 'VCH461',
                'description' => '',
                'start_date' => '2019-7-6',
                'end_date' => '2019-8-15',
                'value' => 2.50
            ],
            3 => [
                'name' => 'VOCH1235',
                'description' => '',
                'start_date' => '2019-7-24',
                'end_date' => '2019-7-31',
                'value' => 1.50
            ],
            4 => [
                'name' => 'VOCH1011',
                'description' => '',
                'start_date'=>'2019-7-1',
                'end_date'=>'2019-8-3',
                'value'=>0.80
            ],
        ];
        foreach ($vouchers as $voucher) {
            $vouchers = Vouchers::create($voucher);
        }
    
    }
}
