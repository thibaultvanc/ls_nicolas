<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePicaflorFirmFirmTable extends Migration
{
	public function up()
	{
		if( ! Schema::hasTable("5_Picaflor____firm_firm")) {
			Schema::create("5_Picaflor____firm_firm", function (Blueprint $table) {
				$table->increments('id');
				$table->integer('firm_id')->unsigned();
				//$table->foreign('firm_id')->references('id')->on('firms');

				$table->integer('composedby_firm_id')->unsigned();
				//$table->foreign('composedby_firm_id')->references('id')->on('firms');

				$table->timestamps();
				$table->softDeletes();
			});
		}//endif
	}


	public function down()
	{
		if( Schema::hasTable("5_Picaflor____firm_firm")) {
			Schema::drop("5_Picaflor____firm_firm");
		}
	}
}


