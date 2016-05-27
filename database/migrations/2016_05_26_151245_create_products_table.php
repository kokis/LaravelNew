<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('article');
            $table->string('code');
            $table->string('title');
            $table->text('description');
            $table->string('image');
            $table->tinyInteger('ageStart');
            $table->tinyInteger('ageEnd');
            $table->float('cost');
            $table->integer('price');
            $table->integer('priceRecommended');
            $table->integer('weight');
            $table->integer('width');
            $table->integer('height');
            $table->integer('length');
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
