<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePointagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            Schema::create('pointages', function(Blueprint $table) {
                $table->increments('id');
                $table->date('date');
                $table->integer('devis_id')->unsigned()->nullable();
                $table->string('dbase');
                $table->integer('minutes');
                $table->string('type');

                $table->foreign('devis_id')->references('id')->on('devis');

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
        Schema::drop('pointages');
    }

}
