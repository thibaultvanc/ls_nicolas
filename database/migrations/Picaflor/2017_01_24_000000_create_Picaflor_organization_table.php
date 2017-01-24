<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePicaflorOrganizationTable extends Migration
{
	public function up()
	{
		if( ! Schema::hasTable("5_Picaflor____organizations")) {
			Schema::create("5_Picaflor____organizations", function (Blueprint $table) {
				$table->string('name', 255);
				$table->increments('id');
				$table->timestamps();
				$table->softDeletes();
			});
		}//endif
	}


	public function down()
	{
		if( Schema::hasTable("5_Picaflor____organizations")) {
			Schema::drop("5_Picaflor____organizations");
		}
	}
}


