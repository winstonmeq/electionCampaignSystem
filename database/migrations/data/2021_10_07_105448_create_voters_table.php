<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVotersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
   
    {
        Schema::create('voters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('coordinatorId');
         
            $table->string('fname')->nullable();
            $table->string('lname')->nullable();
            $table->string('purok')->nullable();         
            $table->string('contact_no')->nullable();            
            $table->string('lat')->nullable();
            $table->string('lng')->nullable();
        

            $table->string('governor')->nullable();    
            $table->string('viceGovernor')->nullable();    
            $table->string('boardMember1')->nullable();    
            $table->string('boardMember2')->nullable();    
            $table->string('boardMember3')->nullable();    
            $table->string('boardMember4')->nullable();    
            $table->string('boardMember5')->nullable();    
            $table->string('boardMember6')->nullable();    
            $table->string('boardMember7')->nullable(); 
            $table->string('boardMember8')->nullable();
            $table->string('mayor')->nullable();
            $table->string('viceMayor')->nullable();      
            $table->string('munCouncilor1')->nullable();
            $table->string('munCouncilor2')->nullable();      
            $table->string('munCouncilor3')->nullable();      
            $table->string('munCouncilor4')->nullable();      
            $table->string('munCouncilor5')->nullable();      
            $table->string('munCouncilor6')->nullable();      
            $table->string('munCouncilor7')->nullable();      
            $table->string('munCouncilor8')->nullable();     
           
     
        
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
        Schema::dropIfExists('voters');
    }
}
