<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePicajolyRoleTable extends Migration
{
	public function up()
	{
		if( ! Schema::hasTable("4_Picajoly____roles")) {
			Schema::create("4_Picajoly____roles", function (Blueprint $table) {
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
		if( Schema::hasTable("4_Picajoly____roles")) {
			Schema::drop("4_Picajoly____roles");
		}
	}
}


