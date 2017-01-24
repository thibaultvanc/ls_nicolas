<?php

$factory->define(App\Models\Arthes\Admin\Account::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"account_id" => $faker->randomDigitNotNull,
		"account_name" => $faker->word,
		"account_code" => $faker->word,
		"currency_id" => $faker->randomDigitNotNull,
		"currency_code" => $faker->word,
		"account_type" => $faker->word,
		"is_active" => $faker->boolean($chanceOfGettingTrue = 50),
		"balance" => $faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = NULL),
		"bank_balance" => $faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = NULL),
		"bcy_balance" => $faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = NULL),
		"bank_name" => $faker->word,
		"routing_number" => $faker->word,
		"is_primary_account" => $faker->boolean($chanceOfGettingTrue = 50),
		"is_paypal_account" => $faker->boolean($chanceOfGettingTrue = 50),
		"paypal_email_address" => $faker->email,
	];
});


$factory->define(App\Models\Arthes\Admin\Contact::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"contact_id" => $faker->randomDigitNotNull,
		"contact_name" => $faker->word,
		"company_name" => $faker->word,
		"contact_type" => $faker->word,
		"status" => $faker->word,
		"source" => $faker->word,
		"is_linked_with_zohocrm" => $faker->boolean($chanceOfGettingTrue = 50),
		"payment_terms" => $faker->randomDigitNotNull,
		"payment_terms_label" => $faker->word,
		"currency_id" => $faker->randomDigitNotNull,
		"currency_code" => $faker->word,
		"outstanding_receivable_amount" => $faker->randomDigitNotNull,
		"outstanding_payable_amount" => $faker->randomDigitNotNull,
		"unused_credits_receivable_amount" => $faker->randomDigitNotNull,
		"unused_credits_payable_amount" => $faker->randomDigitNotNull,
		"first_name" => $faker->word,
		"last_name" => $faker->word,
		"email" => $faker->email,
		"phone" => $faker->word,
		"mobile" => $faker->randomDigitNotNull,
		"created_time" => $faker->dateTimeBetween($startDate = "-30 years", $endDate = "now", $timezone = date_default_timezone_get()),
		"last_modified_time" => $faker->dateTimeBetween($startDate = "-30 years", $endDate = "now", $timezone = date_default_timezone_get()),
	];
});


$factory->define(App\Models\Arthes\Admin\Currency::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"currency_id" => $faker->randomDigitNotNull,
		"currency_code" => $faker->randomDigitNotNull,
		"currency_name" => $faker->word,
		"currency_symbol" => $faker->word,
		"price_precision" => $faker->randomDigitNotNull,
		"currency_format" => $faker->word,
		"is_base_currency" => $faker->boolean($chanceOfGettingTrue = 50),
	];
});


$factory->define(App\Models\Arthes\Admin\Invoice::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"invoice_id" => $faker->randomDigitNotNull,
		"customer_name" => $faker->word,
		"customer_id" => $faker->randomDigitNotNull,
		"status" => $faker->word,
		"invoice_number" => $faker->word,
		"reference_number" => $faker->word,
		"date" => $faker->dateTimeBetween($startDate = "-30 years", $endDate = "now", $timezone = date_default_timezone_get()),
		"due_date" => $faker->dateTimeBetween($startDate = "-30 years", $endDate = "now", $timezone = date_default_timezone_get()),
		"due_days" => $faker->randomDigitNotNull,
		"currency_id" => $faker->randomDigitNotNull,
		"currency_code" => $faker->word,
		"is_viewed_by_client" => $faker->boolean($chanceOfGettingTrue = 50),
		"total" => $faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = NULL),
		"balance" => $faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = NULL),
		"is_emailed" => $faker->boolean($chanceOfGettingTrue = 50),
		"reminders_sent" => $faker->boolean($chanceOfGettingTrue = 50),
	];
});


$factory->define(App\Models\Arthes\Admin\Item::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"item_id" => $faker->randomDigitNotNull,
		"name" => $faker->word,
		"item_name" => $faker->word,
		"sku" => $faker->word,
		"image_name" => $faker->word,
		"status" => $faker->word,
		"source" => $faker->word,
		"is_linked_with_zohocrm" => $faker->boolean($chanceOfGettingTrue = 50),
		"description" => $faker->word,
		"rate" => $faker->randomDigitNotNull,
		"tax_id" => $faker->randomDigitNotNull,
		"tax_name" => $faker->word,
		"tax_percentage" => $faker->randomDigitNotNull,
		"item_type" => $faker->word,
		"created_time" => $faker->dateTimeBetween($startDate = "-30 years", $endDate = "now", $timezone = date_default_timezone_get()),
		"last_modified_time" => $faker->dateTimeBetween($startDate = "-30 years", $endDate = "now", $timezone = date_default_timezone_get()),
	];
});


$factory->define(App\Models\Arthes\Admin\Organization::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"isOrgNotSupported" => $faker->randomDigitNotNull,
		"organization_id" => $faker->randomDigitNotNull,
		"name" => $faker->word,
		"contact_name" => $faker->word,
		"email" => $faker->email,
		"source" => $faker->word,
		"country" => $faker->word,
		"org_settings" => $faker->boolean($chanceOfGettingTrue = 50),
		"is_ziedition" => $faker->boolean($chanceOfGettingTrue = 50),
		"is_sku_enabled" => $faker->boolean($chanceOfGettingTrue = 50),
		"version" => $faker->word,
		"version_formatted" => $faker->word,
		"is_moss_enabled" => $faker->boolean($chanceOfGettingTrue = 50),
		"is_sales_inclusive_tax_enabled" => $faker->boolean($chanceOfGettingTrue = 50),
		"tax_group_enabled" => $faker->boolean($chanceOfGettingTrue = 50),
		"language_code" => $faker->word,
		"fiscal_year_start_month" => $faker->randomDigitNotNull,
		"time_zone" => $faker->word,
		"field_separator" => $faker->word,
		"time_zone_formatted" => $faker->word,
		"is_trip_enabled" => $faker->boolean($chanceOfGettingTrue = 50),
		"can_show_document_tab" => $faker->boolean($chanceOfGettingTrue = 50),
		"currency_id" => $faker->randomDigitNotNull,
		"currency_code" => $faker->word,
		"currency_symbol" => $faker->word,
		"currency_format" => $faker->word,
		"price_precision" => $faker->randomDigitNotNull,
	];
});


$factory->define(App\Models\Arthes\Admin\Payment::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"payment_id" => $faker->randomDigitNotNull,
		"customer_id" => $faker->randomDigitNotNull,
		"customer_name" => $faker->word,
		"payment_mode" => $faker->randomDigitNotNull,
		"date" => $faker->dateTimeBetween($startDate = "-30 years", $endDate = "now", $timezone = date_default_timezone_get()),
		"account_id" => $faker->randomDigitNotNull,
		"account_name" => $faker->word,
		"exchange_rate" => $faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = NULL),
		"amount" => $faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = NULL),
		"bank_charges" => $faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = NULL),
		"tax_account_name" => $faker->word,
		"tax_amount_withheld" => $faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = NULL),
		"description" => $faker->paragraph,
		"reference_number" => $faker->word,
	];
});


$factory->define(App\Models\Arthes\Admin\Person::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"contact_person_id" => $faker->randomDigitNotNull,
		"contact_id" => $faker->randomDigitNotNull,
		"salutation" => $faker->word,
		"first_name" => $faker->word,
		"last_name" => $faker->word,
		"email" => $faker->email,
		"phone" => $faker->word,
		"mobile" => $faker->word,
	];
});


