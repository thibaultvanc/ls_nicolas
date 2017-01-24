<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
                $table->string('first_name');
                $table->string('last_name');
                $table->integer('client_id');
                $table->boolean('is_commercial');
                $table->integer('comm_1');
                $table->integer('comm_2');
                $table->string('phone');
                $table->string('phone2');
                $table->text('address');
                $table->string('zip');
                $table->string('city');
                $table->string('country');
                $table->string('email');
                $table->string('password');
                $table->string('remember_token');
                $table->boolean('is_admin');
                $table->integer('client_id')->unsigned()->index()->change();

                $table->string('zoho_login')->nullable();
                $table->string('zoho_password')->nullable();
                $table->string('zoho_token')->nullable();
                $table->string('zoho_contact_id')->nullable();

                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
