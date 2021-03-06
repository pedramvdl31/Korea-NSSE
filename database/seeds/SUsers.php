<?php

use Illuminate\Database\Seeder;

class SUsers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('users')->insert([
		    [
		        'id' => '1',
		        'username' => 'admin1',
		        'email' => 'pedramkhoshnevis@gmail.com',
		        'role' => '1',
		        'password' => bcrypt('#09876poiuy#'),
		        'api_token' => str_random(60)
		    ],
		    [
		        'id' => '2',
		        'username' => 'pedram',
		        'email' => 'pedram@eyelevate.com',
		        'role' => '1',
		        'password' => bcrypt('110110'),
		        'api_token' => str_random(60)
		    ]
		 ]);
    }
}
