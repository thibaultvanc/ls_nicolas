<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFactureProjectPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('facture_project', function (Blueprint $table) {
        //     $table->integer('facture_id')->unsigned()->index();
        //     $table->foreign('facture_id')->references('id')->on('factures')->onDelete('cascade');
        //     $table->integer('project_id')->unsigned()->index();
        //     $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
        //     $table->primary(['facture_id', 'project_id']);
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::drop('facture_project');
    }
}
