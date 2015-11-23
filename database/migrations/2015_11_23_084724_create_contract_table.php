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
            $table->foreign('emp_id')->references('emp_id')->on('employee');
            $table->foreign('ps_id')->references('ps_id')->on('personal_solution');
            $table->string('con_role');
            $table->string('con_description');
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
        Schema::drop('contract');
    }
}
