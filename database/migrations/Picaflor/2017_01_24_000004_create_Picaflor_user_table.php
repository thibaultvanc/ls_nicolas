<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePicaflorUserTable extends Migration
{
	public function up()
	{
		if( ! Schema::hasTable("5_Picaflor____users")) {
			Schema::create("5_Picaflor____users", function (Blueprint $table) {
				$table->increments('id');
				$table->string('firstname', 255);
				$table->string('lastname', 255);
				$table->string('phone', 255);
				$table->string('email');
				$table->string('password', 255);
				$table->string('remember_token', 255);
				$table->boolean('is_admin');
				$table->integer('organization_id');
				$table->boolean('is_brand_admin');
				$table->string('phone2', 255);
				$table->timestamps();
				$table->softDeletes();
			});
		}//endif
	}


	public function down()
	{
		if( Schema::hasTable("5_Picaflor____users")) {
			Schema::drop("5_Picaflor____users");
		}
	}
}


