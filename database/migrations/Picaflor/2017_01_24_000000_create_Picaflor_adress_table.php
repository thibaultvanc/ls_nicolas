<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePicaflorAdressTable extends Migration
{
	public function up()
	{
		if( ! Schema::hasTable("5_Picaflor____adresses")) {
			Schema::create("5_Picaflor____adresses", function (Blueprint $table) {
				$table->increments('id');
				$table->string('name', 255);
				$table->integer('brand_id')->unsigned();
				//$table->foreign('brand_id')->references('id')->on('firms');

				$table->timestamps();
				$table->softDeletes();
			});
		}//endif
	}


	public function down()
	{
		if( Schema::hasTable("5_Picaflor____adresses")) {
			Schema::drop("5_Picaflor____adresses");
		}
	}
}


