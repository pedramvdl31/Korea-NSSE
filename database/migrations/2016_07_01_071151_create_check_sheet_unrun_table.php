<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCheckSheetUnrunTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('check_sheet_unrun', function(Blueprint $table) {
         $table->increments('id');
         $table->integer('check_sheets_id',false,true)->nullable();
         $table->string('start_time')->nullable();
         $table->string('end_time')->nullable();
         $table->string('type')->nullable();
         $table->text('comment')->nullable();
         $table->tinyInteger('status')->default('0');
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
        Schema::drop('check_sheet_unrun');
    }
}
