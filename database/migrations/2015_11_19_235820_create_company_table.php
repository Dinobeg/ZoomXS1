<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company', function (Blueprint $table) {
            $table->increments('comp_id');
            $table->string('comp_name')->nullable();
            $table->string('comp_address')->nullable();
            $table->string('comp_phone_num')->nullable();
            $table->string('comp_email')->nullable();
            $table->string('comp_profession')->nullable();
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
        Schema::drop('company');
    }
}
