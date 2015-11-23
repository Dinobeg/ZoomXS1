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
        Schema::create('personal_solution', function (Blueprint $table) {
            $table->increments('ps_id');
            $table->foreign('sol_id')->references('sol_id')->on('solution');
            $table->foreign('comp_id')->references('comp_id')->on('company');
            $table->string('ps_name');
            $table->string('ps_description');
            $table->date('ps_maintenance_from');
            $table->date('ps_maintenance_to');
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
        Schema::drop('personal_solution');
    }
}
