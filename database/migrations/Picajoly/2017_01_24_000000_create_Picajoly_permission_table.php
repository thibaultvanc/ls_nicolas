<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePicajolyPermissionTable extends Migration
{
	public function up()
	{
		if( ! Schema::hasTable("4_Picajoly____permissions")) {
			Schema::create("4_Picajoly____permissions", function (Blueprint $table) {
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
		if( Schema::hasTable("4_Picajoly____permissions")) {
			Schema::drop("4_Picajoly____permissions");
		}
	}
}


