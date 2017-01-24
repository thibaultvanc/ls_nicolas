<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePicaflorOrganizationUserTable extends Migration
{
	public function up()
	{
		if( ! Schema::hasTable("5_Picaflor____organization_user")) {
			Schema::create("5_Picaflor____organization_user", function (Blueprint $table) {
				$table->increments('id');
				$table->integer('organization_id')->unsigned();
				//$table->foreign('organization_id')->references('id')->on('organizations');

				$table->integer('user_id')->unsigned();
				//$table->foreign('user_id')->references('id')->on('users');

				$table->timestamps();
				$table->softDeletes();
			});
		}//endif
	}


	public function down()
	{
		if( Schema::hasTable("5_Picaflor____organization_user")) {
			Schema::drop("5_Picaflor____organization_user");
		}
	}
}


