<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePicaflorProductTypeTable extends Migration
{
	public function up()
	{
		if( ! Schema::hasTable("5_Picaflor____product_types")) {
			Schema::create("5_Picaflor____product_types", function (Blueprint $table) {
				$table->increments('id');
				$table->string('name', 255);
				$table->timestamps();
				$table->softDeletes();
			});
		}//endif
	}


	public function down()
	{
		if( Schema::hasTable("5_Picaflor____product_types")) {
			Schema::drop("5_Picaflor____product_types");
		}
	}
}


