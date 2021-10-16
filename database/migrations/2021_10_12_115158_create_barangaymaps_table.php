<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangaymapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('barangaymaps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('mapName')->nullable();
            $table->json('polygons')->nullable();           
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
        Schema::dropIfExists('barangaymaps');
    }
}
