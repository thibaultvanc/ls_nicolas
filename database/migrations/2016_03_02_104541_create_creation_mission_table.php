<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCreationMissionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            Schema::create('creation_mission', function(Blueprint $table) {
                $table->integer('creation_id')->unsigned();
                //$table->foreign('creation_id')->references('id')->on('creations')->onDelete('cascade');

                $table->integer('mission_id')->unsigned();
               $table->foreign('mission_id')->references('idmission')->on('missions')->onDelete('cascade');

                $table->string('main');

                $table->primary(['creation_id', 'mission_id']);

            });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('creation_mission');
    }

}
