<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->date('date_of_birth');
            $table->string('cnic');
            $table->string('designation');
            $table->string('department');
            $table->string('province')->nullable();
            $table->string('district')->nullable();
            $table->text('cell_number');
            $table->text('landline')->nullable();
            $table->string('email');
            $table->text('degree_qualification');
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
        Schema::dropIfExists('participants');
    }
}
