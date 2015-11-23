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
            $table->foreign('ps_id')->references('ps_id')->on('personal_solution');
            $table->foreign('con_id')->references('con_id')->on('contract');
            $table->foreign('cl_id')->references('cl_id')->on('client');
            $table->foreign('task')->references('t_id')->on('task');
            $table->foreign('ts_id')->references('ts_id')->on('task_status');
            $table->foreign('tp_id')->references('tp_id')->on('task_priority');
            $table->foreign('tc_id')->references('tc_id')->on('task_category');
            $table->string('t_name');
            $table->string('t_description');
            $table->string('t_type');
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
        Schema::drop('task');
    }
}
