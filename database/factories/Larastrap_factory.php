<?php

$factory->define(App\Models\Larastrap\Admin\Table::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"devis_id" => function () {
			return factory(App\Models\Larastrap\Admin\Devis::class)->create()->id;
		},
		"name" => $faker->word,
		"model" => $faker->word,
		"space_id" => function () {
			return factory(App\Models\Larastrap\Admin\Space::class)->create()->id;
		},
	];
});


$factory->define(App\Models\Larastrap\Admin\Space::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"name" => $faker->word,
		"theme_id" => function () {
			return factory(App\Models\Larastrap\Admin\Theme::class)->create()->id;
		},
	];
});


$factory->define(App\Models\Larastrap\Admin\Devis::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"client_id" => function () {
			return factory(App\Models\Larastrap\Admin\Client::class)->create()->id;
		},
		"validated_by" => function () {
			return factory(App\Models\Larastrap\Admin\Contact::class)->create()->id;
		},
		"esperence" => $faker->randomDigitNotNull,
		"name" => $faker->word,
	];
});


$factory->define(App\Models\Larastrap\Admin\FieldType::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"name" => $faker->word,
	];
});


$factory->define(App\Models\Larastrap\Admin\Relationship::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"from_field_id" => function () {
			return factory(App\Models\Larastrap\Admin\Field::class)->create()->id;
		},
		"to_field_id" => function () {
			return factory(App\Models\Larastrap\Admin\Field::class)->create()->id;
		},
		"from_field_name" => $faker->word,
		"to_field_name" => $faker->word,
		"laravel_name" => $faker->word,
		"to_model" => $faker->randomDigitNotNull,
		"on_field_id" => $faker->randomDigitNotNull,
		"pivot_table_name" => $faker->word,
	];
});


$factory->define(App\Models\Larastrap\Admin\Theme::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"name" => $faker->word,
	];
});


$factory->define(App\Models\Larastrap\Admin\Client::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"is_pro" => $faker->boolean($chanceOfGettingTrue = 50),
		"name" => $faker->word,
	];
});


$factory->define(App\Models\Larastrap\Admin\Contact::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"client_id" => function () {
			return factory(App\Models\Larastrap\Admin\Client::class)->create()->id;
		},
		"name" => $faker->word,
	];
});


$factory->define(App\Models\Larastrap\Admin\Field::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"field_type_id" => function () {
			return factory(App\Models\Larastrap\Admin\FieldType::class)->create()->id;
		},
		"name" => $faker->word,
		"placeholder" => $faker->word,
		"label" => $faker->word,
		"is_primary" => $faker->boolean($chanceOfGettingTrue = 50),
		"table_id" => function () {
			return factory(App\Models\Larastrap\Admin\Table::class)->create()->id;
		},
		"order" => $faker->randomDigitNotNull,
		"is_on_foreign_label" => $faker->boolean($chanceOfGettingTrue = 50),
		"is_required" => $faker->boolean($chanceOfGettingTrue = 50),
		"is_incrementable" => $faker->boolean($chanceOfGettingTrue = 50),
		"is_unique" => $faker->boolean($chanceOfGettingTrue = 50),
		"is_nullable" => $faker->boolean($chanceOfGettingTrue = 50),
		"is_unsigned" => $faker->boolean($chanceOfGettingTrue = 50),
		"is_index" => $faker->boolean($chanceOfGettingTrue = 50),
		"is_on_index_view" => $faker->boolean($chanceOfGettingTrue = 50),
	];
});


$factory->define(App\Models\Larastrap\Admin\ThemeType::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"theme_id" => function () {
			return factory(App\Models\Larastrap\Admin\Theme::class)->create()->id;
		},
	];
});


