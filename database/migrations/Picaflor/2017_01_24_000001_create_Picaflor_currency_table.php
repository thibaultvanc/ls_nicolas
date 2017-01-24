<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePicaflorCurrencyTable extends Migration
{
	public function up()
	{
		if( ! Schema::hasTable("5_Picaflor____currencies")) {
			Schema::create("5_Picaflor____currencies", function (Blueprint $table) {
				$table->increments('id');
				$table->string('name', 255);
				$table->string('code', 255);
				$table->string('symbol', 255);
				$table->timestamps();
				$table->softDeletes();
			});
		}//endif
	}


	public function down()
	{
		if( Schema::hasTable("5_Picaflor____currencies")) {
			Schema::drop("5_Picaflor____currencies");
		}
	}
}


