<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalSolutionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_solutions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('solution')->unsigned();
            $table->integer('company')->unsigned();
            $table->string('name');
            $table->string('description');
            $table->date('maintenance_from');
            $table->date('maintenance_to');
            $table->timestamps();
        });

        Schema::table('personal_solutions', function($table) {
            $table->foreign('solution')->references('id')->on('solutions');
            $table->foreign('company')->references('id')->on('companies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('personal_solutions');
    }
}
