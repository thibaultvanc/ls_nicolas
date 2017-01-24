<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePicaflorBrandUserTable extends Migration
{
	public function up()
	{
		if( ! Schema::hasTable("5_Picaflor____brand_user")) {
			Schema::create("5_Picaflor____brand_user", function (Blueprint $table) {
				$table->increments('id');
				$table->integer('brand_id')->unsigned();
				//$table->foreign('brand_id')->references('id')->on('firms');

				$table->integer('user_id')->unsigned();
				//$table->foreign('user_id')->references('id')->on('users');

				$table->integer('country_id')->unsigned();
				//$table->foreign('country_id')->references('id')->on('countries');

				$table->timestamps();
				$table->softDeletes();
			});
		}//endif
	}


	public function down()
	{
		if( Schema::hasTable("5_Picaflor____brand_user")) {
			Schema::drop("5_Picaflor____brand_user");
		}
	}
}


