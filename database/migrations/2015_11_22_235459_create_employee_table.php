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
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user')->unsigned();
            $table->string('f_name')->nullable();
            $table->string('l_name')->nullable();
            $table->string('phone_num')->nullable();
            $table->string('profession')->nullable();
            $table->boolean('is_active')->nullable();
            $table->boolean('is_available')->nullable();
            $table->timestamps();
        });

        Schema::table('employees', function($table) {
            $table->foreign('user')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('employees');
    }
}
