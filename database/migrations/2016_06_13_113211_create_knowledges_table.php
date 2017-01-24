<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKnowledgesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('Knowledges', function(Blueprint $table) {
                $table->increments('id');
                
                $table->string('slug');
                $table->string('titleSf');
                $table->string('img_catSf');
                $table->integer('ordre');
                $table->string('accroche');
                $table->string('img_sscat');
                $table->string('rightLeft');
                $table->string('paragraphe1');
                $table->string('paragraphe2');
                $table->string('paragraphe3');
                $table->string('img_descr1');
                $table->string('img_descr2');
                $table->string('img_descr3');
                $table->string('img_descr4');



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
        Schema::drop('Knowledges');
    }
}
