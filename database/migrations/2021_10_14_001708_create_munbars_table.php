<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMunbarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      
       
        Schema::create('munbars', function (Blueprint $table) {
            $table->id();
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
        Schema::dropIfExists('munbars');
    }
}
