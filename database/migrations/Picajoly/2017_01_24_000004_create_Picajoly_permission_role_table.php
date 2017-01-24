<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePicajolyPermissionRoleTable extends Migration
{
	public function up()
	{
		if( ! Schema::hasTable("4_Picajoly____permission_role")) {
			Schema::create("4_Picajoly____permission_role", function (Blueprint $table) {
				$table->increments('id');
				$table->integer('permission_id')->unsigned();
				//$table->foreign('permission_id')->references('id')->on('permissions');

				$table->integer('role_id')->unsigned();
				//$table->foreign('role_id')->references('id')->on('roles');

				$table->timestamps();
				$table->softDeletes();
			});
		}//endif
	}


	public function down()
	{
		if( Schema::hasTable("4_Picajoly____permission_role")) {
			Schema::drop("4_Picajoly____permission_role");
		}
	}
}


