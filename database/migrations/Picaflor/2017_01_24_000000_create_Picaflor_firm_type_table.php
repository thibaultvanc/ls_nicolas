<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePicaflorFirmTypeTable extends Migration
{
	public function up()
	{
		if( ! Schema::hasTable("5_Picaflor____firm_types")) {
			Schema::create("5_Picaflor____firm_types", function (Blueprint $table) {
				$table->increments('id');
				$table->string('name', 255);
				$table->timestamps();
				$table->softDeletes();
			});
		}//endif
	}


	public function down()
	{
		if( Schema::hasTable("5_Picaflor____firm_types")) {
			Schema::drop("5_Picaflor____firm_types");
		}
	}
}


