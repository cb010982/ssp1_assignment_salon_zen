<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::dropIfExists('cart_details');
}


    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::create('cart_details', function (Blueprint $table) {
            
            $table->id();
            $table->string('column1');
           
            $table->timestamps();
        });
    }
    
};
