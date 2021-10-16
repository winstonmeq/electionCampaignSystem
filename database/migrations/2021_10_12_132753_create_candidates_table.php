<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

      
        Schema::create('candidates', function (Blueprint $table) {
            $table->bigIncrements('id');
          
            $table->string('canPosition')->nullable();
            $table->string('mapCode')->nullable();
            $table->bigInteger('opponent')->nullable();
            $table->bigInteger('mine')->nullable();
            $table->bigInteger('hold')->nullable();
            $table->bigInteger('total')->nullable();
            $table->string('munName')->nullable();
            $table->string('barName')->nullable();
            
                 
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
        Schema::dropIfExists('candidates');
    }
}
