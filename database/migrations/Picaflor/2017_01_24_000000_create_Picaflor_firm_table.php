<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePicaflorFirmTable extends Migration
{
	public function up()
	{
		if( ! Schema::hasTable("5_Picaflor____firms")) {
			Schema::create("5_Picaflor____firms", function (Blueprint $table) {
				$table->increments('id');
				$table->string('name', 255);
				$table->integer('country_id')->unsigned();
				//$table->foreign('country_id')->references('id')->on('countries');

				$table->string('url_site', 255);
				$table->string('url_blog', 255);
				$table->string('url_facebook', 255);
				$table->string('firm_name', 255);
				$table->string('tva_intra', 255);
				$table->integer('firm_type_id')->unsigned();
				//$table->foreign('firm_type_id')->references('id')->on('firm_types');

				$table->timestamps();
				$table->softDeletes();
			});
		}//endif
	}


	public function down()
	{
		if( Schema::hasTable("5_Picaflor____firms")) {
			Schema::drop("5_Picaflor____firms");
		}
	}
}


