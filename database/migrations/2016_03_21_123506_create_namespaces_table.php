<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNamespacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('namespaces', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');

            $table->integer('devis_id')->unsigned();
            $table->foreign('devis_id')->references('id')->on('devis');

            $table->integer('theme_id')->unsigned();
            $table->foreign('theme_id')->references('id')->on('themes');

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
        Schema::drop('namespaces');
    }
}
