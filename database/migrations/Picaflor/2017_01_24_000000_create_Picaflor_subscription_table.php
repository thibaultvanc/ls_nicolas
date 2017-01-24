<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePicaflorSubscriptionTable extends Migration
{
	public function up()
	{
		if( ! Schema::hasTable("5_Picaflor____subscriptions")) {
			Schema::create("5_Picaflor____subscriptions", function (Blueprint $table) {
				$table->increments('id');
				$table->string('name', 255);
				$table->integer('user_id')->unsigned();
				//$table->foreign('user_id')->references('id')->on('users');

				$table->integer('plan_id')->unsigned();
				//$table->foreign('plan_id')->references('id')->on('plans');

				$table->date('starts_at');
				$table->date('ends_at');
				$table->string('zoho_contact_id', 255);
				$table->timestamps();
				$table->softDeletes();
			});
		}//endif
	}


	public function down()
	{
		if( Schema::hasTable("5_Picaflor____subscriptions")) {
			Schema::drop("5_Picaflor____subscriptions");
		}
	}
}


