<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePicaflorPermissionTable extends Migration
{
	public function up()
	{
		if( ! Schema::hasTable("5_Picaflor____permissions")) {
			Schema::create("5_Picaflor____permissions", function (Blueprint $table) {
				$table->increments('id');
				$table->string('name', 255);
				$table->string('label', 255);
				$table->timestamps();
				$table->softDeletes();
			});
		}//endif
	}


	public function down()
	{
		if( Schema::hasTable("5_Picaflor____permissions")) {
			Schema::drop("5_Picaflor____permissions");
		}
	}
}


