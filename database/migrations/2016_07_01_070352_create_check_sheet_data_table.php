<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCheckSheetDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('check_sheet_data', function(Blueprint $table) {
         $table->increments('id');
         $table->integer('check_sheets_id',false,true)->nullable();
         $table->string('t1',10)->nullable();
         $table->string('t2',10)->nullable();
         $table->string('t3',10)->nullable();
         $table->string('t4',10)->nullable();
         $table->string('t5',10)->nullable();
         $table->string('t6',10)->nullable();
         $table->string('t7',10)->nullable();
         $table->string('t8',10)->nullable();
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
        Schema::drop('check_sheet_data');
    }
}
