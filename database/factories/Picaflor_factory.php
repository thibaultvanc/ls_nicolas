<?php

$factory->define(App\Models\Picaflor\Admin\User::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"firstname" => $faker->word,
		"lastname" => $faker->word,
		"phone" => $faker->word,
		"email" => $faker->email,
		"password" => $faker->bcrypt("larastrap"),
		"remember_token" => $faker->word,
		"is_admin" => $faker->boolean($chanceOfGettingTrue = 50),
		"organization_id" => $faker->randomDigitNotNull,
		"is_brand_admin" => $faker->boolean($chanceOfGettingTrue = 50),
		"phone2" => $faker->word,
	];
});


$factory->define(App\Models\Picaflor\Admin\RoleUser::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"user_id" => $faker->randomDigitNotNull,
		"role_id" => $faker->randomDigitNotNull,
	];
});


$factory->define(App\Models\Picaflor\Admin\Permission::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"name" => $faker->word,
		"label" => $faker->word,
	];
});


$factory->define(App\Models\Picaflor\Admin\PermissionRole::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"permission_id" => $faker->randomDigitNotNull,
		"role_id" => $faker->randomDigitNotNull,
	];
});


$factory->define(App\Models\Picaflor\Admin\Firm::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"name" => $faker->word,
		"country_id" => function () {
			return factory(App\Models\Picaflor\Admin\Country::class)->create()->id;
		},
		"url_site" => $faker->word,
		"url_blog" => $faker->word,
		"url_facebook" => $faker->word,
		"firm_name" => $faker->word,
		"tva_intra" => $faker->word,
		"firm_type_id" => $faker->randomElement($array = ["1","2","3"]),
	];
});


$factory->define(App\Models\Picaflor\Admin\BrandUser::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"brand_id" => $faker->randomDigitNotNull,
		"user_id" => $faker->randomDigitNotNull,
		"country_id" => function () {
			return factory(App\Models\Picaflor\Admin\Country::class)->create()->id;
		},
	];
});


$factory->define(App\Models\Picaflor\Admin\Country::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"name" => $faker->word,
	];
});


$factory->define(App\Models\Picaflor\Admin\Invoices::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"name" => $faker->word,
		"site_id" => $faker->randomElement($array = ["1","2"]),
		"user_id" => function () {
			return factory(App\User::class)->create()->id;
		},
		"organization_id" => $faker->randomDigitNotNull,
		"zoho_invoice_id" => $faker->word,
		"currency_id" => $faker->randomElement($array = ["1","2","3"]),
	];
});


$factory->define(App\Models\Picaflor\Admin\Product::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"name" => $faker->word,
		"product_type_id" => function () {
			return factory(App\Models\Picaflor\Admin\ProductType::class)->create()->id;
		},
	];
});


$factory->define(App\Models\Picaflor\Admin\Transaction::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"name" => $faker->word,
		"invoices_id" => function () {
			return factory(App\Models\Picaflor\Admin\Invoices::class)->create()->id;
		},
		"payment_provider_id" => function () {
			return factory(App\Models\Picaflor\Admin\PaymentProvider::class)->create()->id;
		},
		"user_id" => $faker->randomDigitNotNull,
	];
});


$factory->define(App\Models\Picaflor\Admin\InvoicesProduct::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"invoices_id" => $faker->randomDigitNotNull,
		"product_id" => $faker->randomDigitNotNull,
		"quantity" => $faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = NULL),
	];
});


$factory->define(App\Models\Picaflor\Admin\Plan::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"name" => $faker->word,
		"site_id" => $faker->randomElement($array = ["1","2"]),
		"plan_family_id" => $faker->randomElement($array = ["1","2","3","4","5"]),
		"currency_id" => $faker->randomElement($array = ["1","2","3"]),
		"plan_period_id" => $faker->randomElement($array = ["1","2"]),
		"role_id" => $faker->randomElement($array = ["1","2","3","4","5"]),
		"plan_type_id" => $faker->randomElement($array = ["1","2","3","4"]),
		"price_ht" => $faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = NULL),
	];
});


$factory->define(App\Models\Picaflor\Admin\Subscription::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"name" => $faker->word,
		"user_id" => function () {
			return factory(App\User::class)->create()->id;
		},
		"plan_id" => function () {
			return factory(App\Models\Picaflor\Admin\Plan::class)->create()->id;
		},
		"starts_at" => $faker->dateTimeBetween($startDate = "-30 years", $endDate = "now", $timezone = date_default_timezone_get()),
		"ends_at" => $faker->dateTimeBetween($startDate = "-30 years", $endDate = "now", $timezone = date_default_timezone_get()),
		"zoho_contact_id" => $faker->word,
	];
});


$factory->define(App\Models\Picaflor\Admin\PaymentProvider::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"name" => $faker->word,
	];
});


$factory->define(App\Models\Picaflor\Admin\ProductType::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"name" => $faker->word,
	];
});


$factory->define(App\Models\Picaflor\Admin\Organization::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"name" => $faker->word,
	];
});


$factory->define(App\Models\Picaflor\Admin\OrganizationUser::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"organization_id" => $faker->randomDigitNotNull,
		"user_id" => $faker->randomDigitNotNull,
	];
});


$factory->define(App\Models\Picaflor\Admin\Adress::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"name" => $faker->word,
		"brand_id" => function () {
			return factory(App\Models\Picaflor\Admin\Firm::class)->create()->id;
		},
	];
});


$factory->define(App\Models\Picaflor\Admin\FirmFirm::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"firm_id" => $faker->randomDigitNotNull,
		"composedby_firm_id" => $faker->randomDigitNotNull,
	];
});


