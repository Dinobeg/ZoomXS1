<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContractTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contract', function (Blueprint $table) {
            $table->increments('con_id');
            $table->integer('emp_id')->unsigned();
            $table->integer('ps_id')->unsigned();
            $table->string('con_role');
            $table->string('con_description');
            $table->timestamps();
        });

        Schema::table('contract', function($table) {
            $table->foreign('emp_id')->references('emp_id')->on('employee');
            $table->foreign('ps_id')->references('ps_id')->on('personal_solution');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('contract');
    }
}
