<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        
        Schema::create('maps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('brgyname')->nullable();
            $table->double('lat')->nullable();
            $table->double('lng')->nullable();
            $table->string('threshold')->nullable();
            $table->string('kalaban')->nullable();
            $table->string('akoa')->nullable();
            $table->json('polygons')->nullable();
            
                    
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
        Schema::dropIfExists('maps');
    }
}
