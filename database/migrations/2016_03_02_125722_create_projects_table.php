<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('projects', function(Blueprint $table) {
                $table->increments('id');
                $table->string('name');
$table->string('dbase_code');
$table->text('description');
$table->date('start_date');
$table->date('end_date');
$table->integer('amount');
$table->text('notes');
$table->text('action');

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
        Schema::drop('projects');
    }

}
