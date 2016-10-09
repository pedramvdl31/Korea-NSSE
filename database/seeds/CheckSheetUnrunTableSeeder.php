<?php

use Illuminate\Database\Seeder;

class CheckSheetUnrunTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('check_sheet_unrun')->insert([
		    [
		        'check_sheets_id' => '1',
		        'start_time' => '10:20',
		        'end_time' => '10:50',
		        'type' => '3',
		        'comment' => 'c1 tertre trhfg',
		    ],
		    [
		        'check_sheets_id' => '1',
		        'start_time' => '18:05',
		        'end_time' => '19:10',
		        'type' => '1',
		        'comment' => 'c2 ku;l df d',
		    ],
		    [
		        'check_sheets_id' => '1',
		        'start_time' => '06:20',
		        'end_time' => '07:00',
		        'type' => '5',
		        'comment' => 'c3 asd ret ukk',
		    ],
		    [
		        'check_sheets_id' => '1',
		        'start_time' => '20:00',
		        'end_time' => '20:05',
		        'type' => '6',
		        'comment' => 'c4 swer y uyyy uy',
		    ]
		]);
    }
}
