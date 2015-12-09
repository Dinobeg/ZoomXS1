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
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('personal_solution')->unsigned();
            $table->integer('contract')->unsigned();
            $table->integer('client')->unsigned();
            $table->integer('task')->unsigned();
            $table->integer('task_status')->unsigned();
            $table->integer('task_priority')->unsigned();
            $table->integer('task_category')->unsigned();
            $table->string('name');
            $table->string('description');
            $table->string('type');
            $table->timestamps();
        });
        
        Schema::table('tasks', function($table) {
            $table->foreign('personal_solution')->references('id')->on('personal_solutions');
            $table->foreign('contract')->references('id')->on('contracts');
            $table->foreign('client')->references('id')->on('clients');
            $table->foreign('task')->references('id')->on('tasks');
            $table->foreign('task_status')->references('id')->on('task_statuses');
            $table->foreign('task_priority')->references('id')->on('task_priorities');
            $table->foreign('task_category')->references('id')->on('task_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tasks');
    }
}
