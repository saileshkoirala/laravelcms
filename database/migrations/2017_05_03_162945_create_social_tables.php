<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSocialTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('facebook', function (Blueprint $table) {
            
            $table->increments('id')->unsigned();
            $table->string('flink');
            $table->timestamps();
            
           
        });

          Schema::create('twitter', function (Blueprint $table) {
            
            $table->increments('id')->unsigned();
            $table->string('tlink');
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
        //
    }
}
