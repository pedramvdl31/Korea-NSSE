<?php

use Illuminate\Database\Seeder;

class CheckSheetTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('check_sheets')->insert([
		    [
		        'id' => '1',
		        'user_id' => '1',
		        'document_no' => 'CS-01',
		        'machine_name' => 'CNC',
		        'machine_id' => '1',
		        'part_no1' => '52154356',
		        'part_weight1' => '962',
		        'work_date' => '2014-04-19',
		        'work_kind' => '1',//1:am,2:pm
		        'model' => '446',
		        'prod_qty' => '3250',
		        'good_qty' => '3244',
		        'bad_qty' => '6',
		        'e1' => '2',
		        'e2' => '1',
		        'e5' => '1',
		        'e6' => '1',
		        'e8' => '1',
		        'worker_appr' => '1',
		        'manager_appr' => '0',
		    ]
		]);
    }
}
