<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client', function (Blueprint $table) {
            $table->increments('cl_id');
            $table->foreign('comp_id')->references('comp_id')->on('company');
            $table->foreign('r_id')->references('r_id')->on('role');
            $table->string('cl_f_name')->nullable();
            $table->string('cl_l_name')->nullable();
            $table->string('cl_address')->nullable();
            $table->string('cl_phone_num')->nullable();
            $table->string('cl_email')->nullable();
            $table->string('cl_position')->nullable();
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
        Schema::drop('client');
    }
}
