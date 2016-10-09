<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCheckSheetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('check_sheets', function(Blueprint $table) {
         $table->increments('id');
         $table->integer('user_id',false,true)->nullable();
         $table->string('document_no',10)->nullable();
         $table->string('machine_name',10)->nullable();
         $table->string('machine_id',10)->nullable();

         $table->string('part_no1',10)->nullable();
         $table->string('part_weight1',10)->nullable();         

         $table->string('part_no2',10)->nullable();
         $table->string('part_weight2',10)->nullable();


         $table->date('work_date')->nullable();
         $table->tinyInteger('work_kind')->nullable();

         
         $table->string('model',10)->nullable();
         $table->string('prod_qty',10)->nullable();
         $table->string('good_qty',10)->nullable();
         $table->string('bad_qty',10)->nullable();
         $table->tinyInteger('e1')->default('0');
         $table->tinyInteger('e2')->default('0');
         $table->tinyInteger('e3')->default('0');
         $table->tinyInteger('e4')->default('0');
         $table->tinyInteger('e5')->default('0');
         $table->tinyInteger('e6')->default('0');
         $table->tinyInteger('e7')->default('0');
         $table->tinyInteger('e8')->default('0');
         $table->tinyInteger('e9')->default('0');
         //approvals
         $table->tinyInteger('worker_appr')->default('0');
         $table->tinyInteger('manager_appr')->default('0');
         $table->tinyInteger('status')->default('0');
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
        Schema::drop('check_sheets');
    }
}
