<?php

$factory->define(App\Models\Play\Admin\Contact::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"name" => $faker->word,
		"contact_type_id" => $faker->randomElement($array = ["1","2","3"]),
	];
});


$factory->define(App\Models\Play\Admin\Address::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"name" => $faker->word,
		"address_type_id" => $faker->randomElement($array = ["1","2","3"]),
		"contact_id" => function () {
			return factory(App\Models\Play\Admin\Contact::class)->create()->id;
		},
		"country_id" => function () {
			return factory(App\Models\Play\Admin\Country::class)->create()->id;
		},
		"social" => $faker->word,
		"tva_intra" => $faker->word,
		"postal" => $faker->word,
		"city" => $faker->word,
		"street1" => $faker->word,
		"ligne2" => $faker->word,
	];
});


$factory->define(App\Models\Play\Admin\Brand::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"name" => $faker->word,
		"contact_type_id" => $faker->randomElement($array = ["1","2","3"]),
		"country_id" => function () {
			return factory(App\Models\Play\Admin\Country::class)->create()->id;
		},
	];
});


$factory->define(App\Models\Play\Admin\Country::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"name" => $faker->word,
	];
});


$factory->define(App\Models\Play\Admin\Currency::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"name" => $faker->word,
	];
});


$factory->define(App\Models\Play\Admin\Inscription::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"name" => $faker->word,
		"contact_id" => function () {
			return factory(App\Models\Play\Admin\Contact::class)->create()->id;
		},
		"subscription_id" => function () {
			return factory(App\Models\Play\Admin\Subscription::class)->create()->id;
		},
		"plan_id" => $faker->randomDigitNotNull,
	];
});


$factory->define(App\Models\Play\Admin\Invoices::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"name" => $faker->word,
		"contact_id" => function () {
			return factory(App\Models\Play\Admin\Contact::class)->create()->id;
		},
		"transaction_id" => $faker->randomDigitNotNull,
		"organization_id" => function () {
			return factory(App\Models\Play\Admin\Organization::class)->create()->id;
		},
	];
});


$factory->define(App\Models\Play\Admin\Organization::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"name" => $faker->word,
	];
});


$factory->define(App\Models\Play\Admin\PlanFamily::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"name" => $faker->word,
	];
});


$factory->define(App\Models\Play\Admin\Plan::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"name" => $faker->word,
		"site_id" => $faker->randomElement($array = ["1","2"]),
		"subscription_id" => $faker->randomDigitNotNull,
		"plan_family_id" => function () {
			return factory(App\Models\Play\Admin\PlanFamily::class)->create()->id;
		},
		"plan_type_id" => $faker->randomElement($array = ["1","2","3","4"]),
		"currency_id" => function () {
			return factory(App\Models\Play\Admin\Currency::class)->create()->id;
		},
		"plan_period_id" => $faker->randomElement($array = ["1","2"]),
	];
});


$factory->define(App\Models\Play\Admin\Subscription::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"name" => $faker->word,
		"contact_id" => function () {
			return factory(App\Models\Play\Admin\Contact::class)->create()->id;
		},
		"is_active" => $faker->boolean($chanceOfGettingTrue = 50),
		"provider_id" => $faker->randomElement($array = ["1","2","3"]),
		"first_login_at" => $faker->dateTimeBetween($startDate = "-30 years", $endDate = "now", $timezone = date_default_timezone_get()),
		"ends_at" => $faker->dateTimeBetween($startDate = "-30 years", $endDate = "now", $timezone = date_default_timezone_get()),
	];
});


$factory->define(App\Models\Play\Admin\Transaction::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"name" => $faker->word,
		"amount" => $faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = NULL),
		"date" => $faker->dateTimeBetween($startDate = "-30 years", $endDate = "now", $timezone = date_default_timezone_get()),
		"contact_id" => $faker->randomDigitNotNull,
		"provider_id" => $faker->randomElement($array = ["1","2","3"]),
		"subscription_id" => function () {
			return factory(App\Models\Play\Admin\Subscription::class)->create()->id;
		},
		"invoices_id" => function () {
			return factory(App\Models\Play\Admin\Invoices::class)->create()->id;
		},
		"site_id" => $faker->randomElement($array = ["1","2"]),
		"payment_option_id" => $faker->randomElement($array = ["1","2","3","4","5"]),
	];
});


$factory->define(App\Models\Play\Web\BrandContact::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"contact_id" => $faker->randomDigitNotNull,
		"brand_id" => $faker->randomDigitNotNull,
	];
});


$factory->define(App\Models\Play\Admin\InscriptionPlan::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"plan_id" => $faker->randomDigitNotNull,
		"inscription_id" => $faker->randomDigitNotNull,
	];
});


$factory->define(App\Models\Play\Admin\PlanSubscription::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"plan_id" => $faker->randomDigitNotNull,
		"subscription_id" => $faker->randomDigitNotNull,
	];
});


