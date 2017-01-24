<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCreationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            Schema::create('creations', function(Blueprint $table) {
                $table->increments('idcreation');
                $table->string('nom_client');
                $table->string('nom_client_simple');
                $table->string('url_site');
                $table->integer('category_id')->unsigned();
                $table->foreign('category_id')->references('id')->on('categories');

                $table->string('brand_main');
                $table->string('brand_main_syntax');
                $table->string('img_1');
                $table->string('img_2');
                $table->string('img_3');
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
        Schema::drop('creations');
    }

}
