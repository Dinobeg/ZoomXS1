<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee', function (Blueprint $table) {
            $table->increments('emp_id');
            $table->integer('r_id')->unsigned();
            $table->string('emp_f_name')->nullable();
            $table->string('emp_l_name')->nullable();
            $table->string('emp_phone_num')->nullable();
            $table->string('emp_profession')->nullable();
            $table->boolean('emp_is_active')->nullable();
            $table->boolean('emp_is_available')->nullable();
            $table->timestamps();
        });

        Schema::table('employee', function($table) {
            $table->foreign('r_id')->references('r_id')->on('role');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('employee');
    }
}
