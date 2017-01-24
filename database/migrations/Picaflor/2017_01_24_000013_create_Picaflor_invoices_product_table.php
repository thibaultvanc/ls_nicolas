<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePicaflorInvoicesProductTable extends Migration
{
	public function up()
	{
		if( ! Schema::hasTable("5_Picaflor____invoices_product")) {
			Schema::create("5_Picaflor____invoices_product", function (Blueprint $table) {
				$table->increments('id');
				$table->integer('invoices_id')->unsigned();
				//$table->foreign('invoices_id')->references('id')->on('invoices');

				$table->integer('product_id')->unsigned();
				//$table->foreign('product_id')->references('id')->on('products');

				$table->decimal('quantity', 10,5);
				$table->timestamps();
				$table->softDeletes();
			});
		}//endif
	}


	public function down()
	{
		if( Schema::hasTable("5_Picaflor____invoices_product")) {
			Schema::drop("5_Picaflor____invoices_product");
		}
	}
}


