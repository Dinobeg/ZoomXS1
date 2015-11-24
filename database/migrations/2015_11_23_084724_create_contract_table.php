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
        Schema::create('contracts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('employee')->unsigned();
            $table->integer('personal_solution')->unsigned();
            $table->string('role');
            $table->string('description');
            $table->timestamps();
        });

        Schema::table('contracts', function($table) {
            $table->foreign('employee')->references('id')->on('employees');
            $table->foreign('personal_solution')->references('id')->on('personal_solutions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('contracts');
    }
}
