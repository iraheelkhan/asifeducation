<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainings', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('title');
            $table->text('description')->nullable();
            $table->date('date')->nullable();
            $table->string('category')->nullable();
            $table->string('status');
            $table->time('time')->nullable();
            $table->integer('duration')->nullable();
            $table->string('venue')->nullable();
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
        Schema::dropIfExists('trainings');
    }
}
