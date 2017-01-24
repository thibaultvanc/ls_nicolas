<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePicaflorPlanFamilyTable extends Migration
{
	public function up()
	{
		if( ! Schema::hasTable("5_Picaflor____plan_families")) {
			Schema::create("5_Picaflor____plan_families", function (Blueprint $table) {
				$table->increments('id');
				$table->string('name', 255);
				$table->string('slug', 255);
				$table->text('description');
				$table->timestamps();
				$table->softDeletes();
			});
		}//endif
	}


	public function down()
	{
		if( Schema::hasTable("5_Picaflor____plan_families")) {
			Schema::drop("5_Picaflor____plan_families");
		}
	}
}


