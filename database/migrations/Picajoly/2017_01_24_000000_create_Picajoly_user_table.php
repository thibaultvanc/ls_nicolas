<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePicajolyUserTable extends Migration
{
	public function up()
	{
		if( ! Schema::hasTable("4_Picajoly____users")) {
			Schema::create("4_Picajoly____users", function (Blueprint $table) {
				$table->increments('id');
				$table->string('firstname', 255);
				$table->string('lastname', 255);
				$table->string('phone', 255);
				$table->string('email');
				$table->string('password', 255);
				$table->string('remember_token', 255);
				$table->boolean('is_admin');
				$table->timestamps();
				$table->softDeletes();
			});
		}//endif
	}


	public function down()
	{
		if( Schema::hasTable("4_Picajoly____users")) {
			Schema::drop("4_Picajoly____users");
		}
	}
}


