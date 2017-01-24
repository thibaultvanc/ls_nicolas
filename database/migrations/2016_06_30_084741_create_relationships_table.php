<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelationshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        echo "RELATIONSHIPS";
        Schema::create('relationships', function (Blueprint $table) {
            //$table->increments('id');


            // $table->integer('from_table_id')->unsigned();
            // $table->foreign('from_table_id')->references('id')->on('tables');

            $table->integer('from_field_id')->unsigned()->index();
            $table->foreign('from_field_id')->references('id')->on('fields')->onDelete('cascade');;

            // $table->integer('to_table_id')->unsigned();
            // $table->foreign('to_table_id')->references('id')->on('tables');

            $table->integer('to_field_id')->unsigned()->index();;
            $table->foreign('to_field_id')->references('id')->on('fields')->onDelete('cascade');;
            $table->string('from_field_name');
            $table->string('to_field_name');

            $table->string('laravel_name');
            $table->string('method');
            $table->integer('to_model');
            $table->integer('on_field_id');

            $table->string('pivot_table_name');
            $table->string('pivot_table_id');

            $table->primary(['from_field_id', 'to_field_id']);

            $table->timestamps();


        });
        echo "-------------";
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        echo "RELATIONSHIPS";
        Schema::drop('relationships');
    }
}
