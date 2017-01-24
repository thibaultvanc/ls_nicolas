<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePicaflorRoleUserTable extends Migration
{
	public function up()
	{
		if( ! Schema::hasTable("5_Picaflor____role_user")) {
			Schema::create("5_Picaflor____role_user", function (Blueprint $table) {
				$table->increments('id');
				$table->integer('user_id')->unsigned();
				//$table->foreign('user_id')->references('id')->on('users');

				$table->integer('role_id')->unsigned();
				//$table->foreign('role_id')->references('id')->on('roles');

				$table->timestamps();
				$table->softDeletes();
			});
		}//endif
	}


	public function down()
	{
		if( Schema::hasTable("5_Picaflor____role_user")) {
			Schema::drop("5_Picaflor____role_user");
		}
	}
}


