<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('contacts', function(Blueprint $table) {
                $table->increments('id');
                $table->string('first_name');
$table->string('last_name');
$table->string('email')->unique();
$table->integer('client_id')->unsigned();
$table->string('phone');
$table->string('phone2');
$table->text('address');
$table->integer('zip');
$table->string('city');
$table->string('country');

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
        Schema::drop('contacts');
    }

}
