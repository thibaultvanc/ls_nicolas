<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            Schema::create('fields', function(Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->string('placeholder');
                $table->string('label');//added
                $table->boolean('is_primary');
                $table->boolean('is_index');
                $table->boolean('is_unsigned');
                $table->boolean('is_fillable');
                $table->boolean('is_nullable');
                $table->boolean('is_unique');
                $table->boolean('is_incrementable');
                $table->boolean('is_required')->default(true);

                $table->boolean('is_on_index_view')->default(true);//added
                $table->boolean('is_on_foreign_label');//added
                $table->boolean('is_on_edit_form');//added
                $table->boolean('is_on_create_form');//added
                $table->text('laravel_validation_rules');//added

                $table->boolean('is_on_mini_form')->default(1);//added
                $table->boolean('is_on_item_view')->default(1);//added

                $table->integer('order');//added



                $table->integer('field_type_id')->unsigned();
                $table->foreign('field_type_id')->references('id')->on('field_types');
                $table->string('faker_method');

                $table->integer('table_id')->unsigned();
                $table->foreign('table_id')->references('id')->on('tables');
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
        Schema::drop('fields');
    }

}
