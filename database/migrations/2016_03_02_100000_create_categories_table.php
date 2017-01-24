<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            Schema::create('categories', function(Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->integer('parent_category_id')->unsigned();
                //$table->foreign('parent_category_id')->references('id')->on('categories');
                $table->string('url_name');
                $table->boolean('active');
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
        Schema::drop('categories');
    }

}
