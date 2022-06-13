<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecialitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specialities', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content');
            $table->string('imageone');
            $table->string('one');   
            $table->text('onedetails');   
            $table->string('imagetwo');
            $table->string('two');   
            $table->text('twodetails'); 
            $table->string('imagethree');
            $table->string('three');   
            $table->text('threedetails'); 
;           $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('specialities');
    }
}