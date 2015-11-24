<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaskTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task', function (Blueprint $table) {
            $table->increments('t_id');
            $table->integer('ps_id')->unsigned();
            $table->integer('con_id')->unsigned();
            $table->integer('cl_id')->unsigned();
            $table->integer('task')->unsigned();
            $table->integer('ts_id')->unsigned();
            $table->integer('tp_id')->unsigned();
            $table->integer('tc_id')->unsigned();
            $table->string('t_name');
            $table->string('t_description');
            $table->string('t_type');
            $table->timestamps();
        });
        
        Schema::table('task', function($table) {
            $table->foreign('ps_id')->references('ps_id')->on('personal_solution');
            $table->foreign('con_id')->references('con_id')->on('contract');
            $table->foreign('cl_id')->references('cl_id')->on('client');
            $table->foreign('task')->references('t_id')->on('task');
            $table->foreign('ts_id')->references('ts_id')->on('task_status');
            $table->foreign('tp_id')->references('tp_id')->on('task_priority');
            $table->foreign('tc_id')->references('tc_id')->on('task_category');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('task');
    }
}
