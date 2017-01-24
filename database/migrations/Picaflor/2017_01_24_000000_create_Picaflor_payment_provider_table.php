<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePicaflorPaymentProviderTable extends Migration
{
	public function up()
	{
		if( ! Schema::hasTable("5_Picaflor____payment_providers")) {
			Schema::create("5_Picaflor____payment_providers", function (Blueprint $table) {
				$table->increments('id');
				$table->string('name', 255);
				$table->timestamps();
				$table->softDeletes();
			});
		}//endif
	}


	public function down()
	{
		if( Schema::hasTable("5_Picaflor____payment_providers")) {
			Schema::drop("5_Picaflor____payment_providers");
		}
	}
}


