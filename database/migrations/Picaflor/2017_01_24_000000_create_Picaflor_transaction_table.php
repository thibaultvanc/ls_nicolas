<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePicaflorTransactionTable extends Migration
{
	public function up()
	{
		if( ! Schema::hasTable("5_Picaflor____transactions")) {
			Schema::create("5_Picaflor____transactions", function (Blueprint $table) {
				$table->increments('id');
				$table->string('name', 255);
				$table->integer('invoices_id')->unsigned();
				//$table->foreign('invoices_id')->references('id')->on('invoices');

				$table->integer('payment_provider_id')->unsigned();
				//$table->foreign('payment_provider_id')->references('id')->on('payment_providers');

				$table->integer('user_id');
				$table->timestamps();
				$table->softDeletes();
			});
		}//endif
	}


	public function down()
	{
		if( Schema::hasTable("5_Picaflor____transactions")) {
			Schema::drop("5_Picaflor____transactions");
		}
	}
}


