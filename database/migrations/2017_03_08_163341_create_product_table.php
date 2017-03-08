<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
          Schema::create('products', function (Blueprint $table) {
            
            $table->increments('id')->unsigned();
            $table->integer('p_id');
            $table->string('subcatname');
            $table->string('prodname');
            $table->string('prodesc');
            $table->string('price');
            $table->string('image');
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
         Schema::drop('products');
    }
}
