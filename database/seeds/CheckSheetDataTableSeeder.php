<?php

use Illuminate\Database\Seeder;

class CheckSheetDataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('check_sheet_data')->insert([
		    [
		        'check_sheets_id' => '1',
		        't1' => '9.076',
		        't2' => '12.14',
		        't3' => '3.245',
		        't4' => '15.324',
		        't5' => '53.076',
		        't6' => '3.43',
		        't7' => '2.234',
		        't8' => '1.076',
		    ],
		    [
		        'check_sheets_id' => '1',
		        't1' => '19.076',
		        't2' => '32.14',
		        't3' => '4.23',
		        't4' => '1.31',
		        't5' => '1.076',
		        't6' => '4.43',
		        't7' => '5.664',
		        't8' => '8.076',
		    ],
		    [
		        'check_sheets_id' => '1',
		        't1' => '1.076',
		        't2' => '5.14',
		        't3' => '3.245',
		        't4' => '15.324',
		        't5' => '4.076',
		        't6' => '3.5',
		        't7' => '2.234',
		        't8' => '5.02',
		    ]

		]);
    }
}
