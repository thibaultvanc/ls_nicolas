<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePicaflorProductTable extends Migration
{
	public function up()
	{
		if( ! Schema::hasTable("5_Picaflor____products")) {
			Schema::create("5_Picaflor____products", function (Blueprint $table) {
				$table->increments('id');
				$table->string('name', 255);
				$table->integer('product_type_id')->unsigned();
				//$table->foreign('product_type_id')->references('id')->on('product_types');

				$table->timestamps();
				$table->softDeletes();
			});
		}//endif
	}


	public function down()
	{
		if( Schema::hasTable("5_Picaflor____products")) {
			Schema::drop("5_Picaflor____products");
		}
	}
}


