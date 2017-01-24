<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePicaflorPlanTypeTable extends Migration
{
	public function up()
	{
		if( ! Schema::hasTable("5_Picaflor____plan_types")) {
			Schema::create("5_Picaflor____plan_types", function (Blueprint $table) {
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
		if( Schema::hasTable("5_Picaflor____plan_types")) {
			Schema::drop("5_Picaflor____plan_types");
		}
	}
}


