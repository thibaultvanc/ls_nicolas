<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePicaflorPlanPeriodTable extends Migration
{
	public function up()
	{
		if( ! Schema::hasTable("5_Picaflor____plan_periods")) {
			Schema::create("5_Picaflor____plan_periods", function (Blueprint $table) {
				$table->increments('id');
				$table->string('name', 255);
				$table->string('slug', 255);
				$table->timestamps();
				$table->softDeletes();
			});
		}//endif
	}


	public function down()
	{
		if( Schema::hasTable("5_Picaflor____plan_periods")) {
			Schema::drop("5_Picaflor____plan_periods");
		}
	}
}


