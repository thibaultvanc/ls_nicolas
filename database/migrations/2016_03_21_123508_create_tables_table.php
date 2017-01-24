<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            Schema::create('tables', function(Blueprint $table) {
                $table->increments('id');
                $table->integer('devis_id')->unsigned();
                $table->foreign('devis_id')->references('id')->on('devis');

                $table->boolean('is_menu')->default(1);
                $table->boolean('is_api');
                $table->boolean('is_settings');

                $table->boolean('is_pivot');
                $table->string('name');
                $table->string('model');
                $table->integer('namespace_id')->unsigned();
                $table->foreign('namespace_id')->references('id')->on('namespaces');





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
        Schema::drop('tables');
    }

}
