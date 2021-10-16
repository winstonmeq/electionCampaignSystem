<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoordinatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()

     {
        Schema::create('coordinators', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username')->nullable();
            $table->string('password')->nullable();
            $table->string('fname')->nullable();
            $table->string('lname')->nullable();
            $table->string('purok')->nullable();
            $table->string('brgy')->nullable();
            $table->string('mun')->nullable();
            $table->string('contact_no')->nullable();    
            $table->unsignedBigInteger('userId');
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
        Schema::dropIfExists('coordinators');
    }
}
