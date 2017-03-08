<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubcategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('subcategories', function (Blueprint $table) {
            //$table->increments('sub_cat_id')->index();
            $table->increments('id')->unsigned();
            $table->integer('sub_id');
            $table->string('catname');
            $table->string('subcatname');
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
         Schema::create('subcategories', function (Blueprint $table) {
            $table->dropColumn('id');

            });
    }  
    
}