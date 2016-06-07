<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesRelationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories_relations', function (Blueprint $table) {
            $table->integer('parent_id')->unsigned()->index();
            $table->foreign('parent_id')->references('id')->on('categories');

            $table->integer('child_id')->unsigned()->index();
            $table->foreign('child_id')->references('id')->on('categories');

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
        Schema::drop('categories_relations');
    }
}
