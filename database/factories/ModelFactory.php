<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create('fr_FR');
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Devis::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create('fr_FR');
    return [
        'number' => $faker->name,
        'app_name' => $faker->email,
        'client_id' => bcrypt(str_random(10)),
    ];
});


$factory->define(App\Client::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create('fr_FR');
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->email,
        'firm_name' => $faker->word,
    ];
});

// first_name
// last_name
// email
// phone
// phone2
// address
// responsable
// firm_name
// firm_statut
