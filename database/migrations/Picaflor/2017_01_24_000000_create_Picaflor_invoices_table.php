<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePicaflorInvoicesTable extends Migration
{
	public function up()
	{
		if( ! Schema::hasTable("5_Picaflor____invoices")) {
			Schema::create("5_Picaflor____invoices", function (Blueprint $table) {
				$table->increments('id');
				$table->string('name', 255);
				$table->integer('site_id')->unsigned();
				//$table->foreign('site_id')->references('id')->on('sites');

				$table->integer('user_id')->unsigned();
				//$table->foreign('user_id')->references('id')->on('users');

				$table->integer('organization_id');
				$table->string('zoho_invoice_id', 255);
				$table->integer('currency_id')->unsigned();
				//$table->foreign('currency_id')->references('id')->on('currencies');

				$table->timestamps();
				$table->softDeletes();
			});
		}//endif
	}


	public function down()
	{
		if( Schema::hasTable("5_Picaflor____invoices")) {
			Schema::drop("5_Picaflor____invoices");
		}
	}
}


