<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePicaflorSiteTable extends Migration
{
	public function up()
	{
		if( ! Schema::hasTable("5_Picaflor____sites")) {
			Schema::create("5_Picaflor____sites", function (Blueprint $table) {
				$table->increments('id');
				$table->string('name', 255);
				$table->timestamps();
				$table->softDeletes();
			});
		}//endif
	}


	public function down()
	{
		if( Schema::hasTable("5_Picaflor____sites")) {
			Schema::drop("5_Picaflor____sites");
		}
	}
}


