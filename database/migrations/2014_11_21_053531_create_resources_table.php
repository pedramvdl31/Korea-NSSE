<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateResourcesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('resources', function(Blueprint $table) {
         $table->increments('id');
         $table->integer('user_id',false,true);
         $table->string('file_src');
         $table->string('original_name');
         $table->string('type')->nullable();
         $table->tinyInteger('status')->default('1');
         $table->softDeletes();
         $table->timestamps();
        });
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('resources');
	}

}
