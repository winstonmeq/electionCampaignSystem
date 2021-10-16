<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatedatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

         
        Schema::create('candidatedatas', function (Blueprint $table) {
            $table->id();
            $table->string('candidateName')->nullable();
            $table->string('position')->nullable();
            $table->string('address')->nullable();
            $table->string('contactno')->nullable();
            $table->unsignedBigInteger('userId')->nullable(); 
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
        Schema::dropIfExists('candidatedatas');
    }
}
