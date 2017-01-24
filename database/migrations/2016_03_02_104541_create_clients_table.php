<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            Schema::create('clients', function(Blueprint $table) {
                $table->increments('id');
                $table->string('first_name');
$table->string('last_name');
$table->string('email');
$table->string('phone');
$table->string('phone2');
$table->text('address');
$table->string('responsable');
$table->string('firm_name');
$table->string('firm_statut');
$table->string('type');
// $table->string('last_name')->change();
// $table->string('firm_statut')->change();
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
        Schema::drop('clients');
    }

}
