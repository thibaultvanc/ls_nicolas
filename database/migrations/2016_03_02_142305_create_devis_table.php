<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDevisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            Schema::create('devis', function(Blueprint $table) {
                $table->increments('id');
                $table->string('number')->unique();
                $table->string('app_name')->unique();
                $table->boolean('is_app_integrates_zoho_package'); // field pour indiquer les apiuti
                // $table->integer('zoho_package_namespace_id')->unsigned()->nullable(); // field pour indiquer les apiuti

                // $table->foreign('zoho_package_namespace_id')->references('id')->on('namespaces');


                $table->string('app_extention');
$table->integer('esperence');
$table->text('note');
$table->date('date');
$table->integer('validated_by_contact');
$table->integer('client_id');
$table->string('title');
$table->text('content');
$table->decimal('amount_HT');
$table->decimal('amount_TTC');
$table->tinyInteger('is_registered');
$table->string('gg_drive_link_devis');
$table->string('gg_drive_link_propal');
$table->string('source');
$table->string('url');
$table->decimal('nb_h_pp',7,2);
$table->decimal('ct_st',7,2);
$table->decimal('acompte_pourc',3,2);
    $table->longText('propal_public_space');
    $table->string('propal_title');
    $table->string('propal_subtitle');
    $table->longText('propal_parcours_pdt');
    $table->longText('propal_presentation');
    $table->longText('propal_goals');
    $table->longText('propal_description');
    $table->longText('propal_features');
    $table->longText('propal_admin_space');
    $table->longText('propal_user_space');
    $table->longText('propal_super_admin_space');
    $table->longText('propal_technic_solution');
    $table->longText('propal_generalities');

    $table->longText('propal_payment_conditions');
    $table->longText('propal_delivery_terms');
    $table->boolean('propal_option_hosting');
    $table->longText('propal_summuary');

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
        Schema::drop('devis');
    }

}
