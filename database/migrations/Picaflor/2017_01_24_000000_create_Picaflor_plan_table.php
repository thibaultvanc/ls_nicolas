<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePicaflorPlanTable extends Migration
{
	public function up()
	{
		if( ! Schema::hasTable("5_Picaflor____plans")) {
			Schema::create("5_Picaflor____plans", function (Blueprint $table) {
				$table->increments('id');
				$table->string('name', 255);
				$table->integer('site_id')->unsigned();
				//$table->foreign('site_id')->references('id')->on('sites');

				$table->integer('plan_family_id')->unsigned();
				//$table->foreign('plan_family_id')->references('id')->on('plan_families');

				$table->integer('currency_id')->unsigned();
				//$table->foreign('currency_id')->references('id')->on('currencies');

				$table->integer('plan_period_id')->unsigned();
				//$table->foreign('plan_period_id')->references('id')->on('plan_periods');

				$table->integer('role_id')->unsigned();
				//$table->foreign('role_id')->references('id')->on('roles');

				$table->integer('plan_type_id')->unsigned();
				//$table->foreign('plan_type_id')->references('id')->on('plan_types');

				$table->decimal('price_ht', 10,5);
				$table->timestamps();
				$table->softDeletes();
			});
		}//endif
	}


	public function down()
	{
		if( Schema::hasTable("5_Picaflor____plans")) {
			Schema::drop("5_Picaflor____plans");
		}
	}
}


