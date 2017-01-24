<?php

$factory->define(App\Models\Middle\Web\Account::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"currency_id" => $faker->randomElement($array = ["1","2","3"]),
		"updated_by" => function () {
			return factory(App\Models\Middle\Web\User::class)->create()->id;
		},
		"vehicle_id" => function () {
			return factory(App\Models\Middle\Web\Vehicle::class)->create()->id;
		},
		"name" => $faker->word,
		"type" => $faker->word,
		"owner" => $faker->word,
		"number" => $faker->word,
		"investment_structure" => $faker->word,
		"insurer" => $faker->word,
		"insurance_contract" => $faker->word,
		"depositary" => $faker->word,
		"notes" => $faker->paragraph,
		"bank" => $faker->word,
	];
});


$factory->define(App\Models\Middle\Web\Bug::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"user_id" => $faker->randomDigitNotNull,
		"title" => $faker->word,
		"content" => $faker->paragraph,
		"status" => $faker->word,
		"client_id" => function () {
			return factory(App\Models\Middle\Web\Client::class)->create()->id;
		},
	];
});


$factory->define(App\Models\Middle\Web\Client::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"name" => $faker->word,
		"slug" => $faker->word,
		"logo_extension" => $faker->word,
		"has_crm" => $faker->boolean($chanceOfGettingTrue = 50),
		"has_middle" => $faker->boolean($chanceOfGettingTrue = 50),
	];
});


$factory->define(App\Models\Middle\Web\Companiecateory::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"Description" => $faker->word,
	];
});


$factory->define(App\Models\Middle\Web\Company::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"client_id" => $faker->randomDigitNotNull,
		"Societe" => $faker->word,
		"Adresse1" => $faker->word,
		"Adresse2" => $faker->word,
		"CP" => $faker->word,
		"VILLE" => $faker->word,
		"PAYS" => $faker->word,
		"SiteWeb" => $faker->word,
		"Tel1" => $faker->word,
		"Tel2" => $faker->word,
		"Fax" => $faker->word,
		"tracked" => $faker->boolean($chanceOfGettingTrue = 50),
		"Notes" => $faker->paragraph,
		"Categorie" => $faker->randomDigitNotNull,
		"LastModifiedUser" => $faker->randomDigitNotNull,
	];
});


$factory->define(App\Models\Middle\Web\Contactable::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"contact_id" => $faker->randomDigitNotNull,
		"contactable_id" => $faker->randomDigitNotNull,
		"contactable_type" => $faker->word,
	];
});


$factory->define(App\Models\Middle\Web\Contactactivity::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"ContactActivityD" => $faker->word,
	];
});


$factory->define(App\Models\Middle\Web\Contactcompany::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"IDcontact" => $faker->randomDigitNotNull,
		"IDCompany" => $faker->randomDigitNotNull,
	];
});


$factory->define(App\Models\Middle\Web\Contact::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"activity_id" => $faker->randomDigitNotNull,
		"company_id" => $faker->randomDigitNotNull,
		"provider_id" => $faker->randomDigitNotNull,
		"user_id" => $faker->randomDigitNotNull,
		"external_id" => $faker->paragraph,
		"fullname" => $faker->word,
		"tracked" => $faker->boolean($chanceOfGettingTrue = 50),
		"img_path" => $faker->paragraph,
	];
});


$factory->define(App\Models\Middle\Web\Contactssociete::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"IDcontact" => $faker->word,
		"IDsociete" => $faker->randomDigitNotNull,
	];
});


$factory->define(App\Models\Middle\Web\Contactsuser::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"IDcontact" => $faker->word,
		"IDuser" => $faker->randomDigitNotNull,
	];
});


$factory->define(App\Models\Middle\Web\Dealable::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"deals_id" => $faker->randomDigitNotNull,
		"dealable_id" => $faker->randomDigitNotNull,
		"dealable_type" => $faker->word,
	];
});


$factory->define(App\Models\Middle\Web\Deal::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"client_id" => $faker->randomDigitNotNull,
		"DealsType" => $faker->boolean($chanceOfGettingTrue = 50),
		"Country" => $faker->word,
		"Companies_IDCompani" => $faker->randomDigitNotNull,
		"ProjectName" => $faker->word,
		"Activities" => $faker->word,
		"AssetName" => $faker->word,
		"Categories" => $faker->randomDigitNotNull,
		"Stage" => $faker->randomDigitNotNull,
		"Shareholders" => $faker->word,
		"LeadInvestor" => $faker->randomDigitNotNull,
		"Sourcing" => $faker->randomDigitNotNull,
		"Sourcingindividual" => $faker->randomDigitNotNull,
		"Term" => $faker->randomDigitNotNull,
		"Next_Steps" => $faker->paragraph,
		"Process" => $faker->word,
		"Why_turn_down" => $faker->word,
		"Work_done" => $faker->word,
		"Due_diligence" => $faker->boolean($chanceOfGettingTrue = 50),
		"PPM" => $faker->boolean($chanceOfGettingTrue = 50),
		"Meeting_with_sellor" => $faker->boolean($chanceOfGettingTrue = 50),
		"Meetings_with_management" => $faker->boolean($chanceOfGettingTrue = 50),
		"Meetings_with_banks" => $faker->boolean($chanceOfGettingTrue = 50),
		"Letter_of_intend" => $faker->boolean($chanceOfGettingTrue = 50),
		"reference_calls" => $faker->boolean($chanceOfGettingTrue = 50),
		"Others" => $faker->boolean($chanceOfGettingTrue = 50),
		"Meeting_with_Partners" => $faker->boolean($chanceOfGettingTrue = 50),
		"ReferenceCalls" => $faker->boolean($chanceOfGettingTrue = 50),
		"Status" => $faker->randomDigitNotNull,
		"PriceEV" => $faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = NULL),
		"Equity" => $faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = NULL),
		"EquityInvestor" => $faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = NULL),
		"TotalDebt" => $faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = NULL),
		"SeniorA" => $faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = NULL),
		"SeniorB" => $faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = NULL),
		"SeniorC" => $faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = NULL),
		"HighYield" => $faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = NULL),
		"InvestorTranche" => $faker->word,
		"InvestorAmount" => $faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = NULL),
		"Grossyield" => $faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = NULL),
		"NetYield" => $faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = NULL),
		"Surface" => $faker->randomDigitNotNull,
		"GeneralPartner" => $faker->word,
		"Fund" => $faker->word,
		"TargetRegion" => $faker->word,
		"LegalForm" => $faker->word,
		"Countryofresidence" => $faker->word,
		"Typesofshares" => $faker->word,
		"Currency" => $faker->word,
		"Fees" => $faker->word,
		"Carried" => $faker->word,
		"Hurlde" => $faker->word,
		"RestofTeam" => $faker->word,
		"CommentsRestofteam" => $faker->paragraph,
		"TargetSize" => $faker->randomDigitNotNull,
		"fstClosingTarget" => $faker->randomDigitNotNull,
		"fstClosingDate" => $faker->dateTimeBetween($startDate = "-30 years", $endDate = "now", $timezone = date_default_timezone_get()),
		"fstClosingDone" => $faker->boolean($chanceOfGettingTrue = 50),
		"sstClosingTarget" => $faker->randomDigitNotNull,
		"sstClosingDate" => $faker->dateTimeBetween($startDate = "-30 years", $endDate = "now", $timezone = date_default_timezone_get()),
		"sstClosingDone" => $faker->boolean($chanceOfGettingTrue = 50),
		"HardCap" => $faker->randomDigitNotNull,
		"AmountRaised" => $faker->randomDigitNotNull,
		"DateOfAmountRaised" => $faker->dateTimeBetween($startDate = "-30 years", $endDate = "now", $timezone = date_default_timezone_get()),
		"KeyLPS" => $faker->word,
		"InvestorShare" => $faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = NULL),
		"TargetIRR" => $faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = NULL),
		"TargetMoM" => $faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = NULL),
		"InvestmentPeriod" => $faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = NULL),
		"TotalLife" => $faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = NULL),
		"Presentations" => $faker->paragraph,
		"Notes" => $faker->paragraph,
		"IM" => $faker->paragraph,
		"LOIDoc" => $faker->paragraph,
		"VDD" => $faker->paragraph,
		"Other" => $faker->paragraph,
		"Memo" => $faker->paragraph,
		"dealdone" => $faker->boolean($chanceOfGettingTrue = 50),
		"dealdoneby" => $faker->word,
		"LastModifiedUser" => $faker->randomDigitNotNull,
		"SeniorARate" => $faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = NULL),
		"SeniorBRate" => $faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = NULL),
		"SeniorCRate" => $faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = NULL),
	];
});


$factory->define(App\Models\Middle\Web\Dealscategory::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"Description" => $faker->word,
	];
});


$factory->define(App\Models\Middle\Web\Dealsfcf::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"Deals_idDeals" => $faker->randomDigitNotNull,
		"FCF_idFCF" => $faker->randomDigitNotNull,
	];
});


$factory->define(App\Models\Middle\Web\Dealspartner::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"Deals_idDeals" => $faker->randomDigitNotNull,
		"Partners_idPartners" => $faker->randomDigitNotNull,
	];
});


$factory->define(App\Models\Middle\Web\Dealsstage::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"Description" => $faker->word,
	];
});


$factory->define(App\Models\Middle\Web\Dealsstatus::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"Status" => $faker->word,
	];
});


$factory->define(App\Models\Middle\Web\Dealsterm::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"Description" => $faker->word,
		"Type" => $faker->boolean($chanceOfGettingTrue = 50),
	];
});


$factory->define(App\Models\Middle\Web\Dealsuser::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"IDdeal" => $faker->randomDigitNotNull,
		"IDUser" => $faker->randomDigitNotNull,
	];
});


$factory->define(App\Models\Middle\Web\Dealsyear::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"Deals_idDeals" => $faker->randomDigitNotNull,
		"year" => $faker->randomDigitNotNull,
		"sales" => $faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = NULL),
		"Grossrents" => $faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = NULL),
		"EBITDA" => $faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = NULL),
		"Netrents" => $faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = NULL),
		"EBIT" => $faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = NULL),
	];
});


$factory->define(App\Models\Middle\Web\Dealworker::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"IDDeal" => $faker->randomDigitNotNull,
		"Type" => $faker->word,
		"Name" => $faker->word,
		"Background" => $faker->paragraph,
	];
});


$factory->define(App\Models\Middle\Web\Documentable::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"document_id" => $faker->randomDigitNotNull,
		"documentable_id" => $faker->randomDigitNotNull,
		"documentable_type" => $faker->word,
	];
});


$factory->define(App\Models\Middle\Web\Document::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"path" => $faker->word,
		"name" => $faker->word,
		"extension" => $faker->word,
	];
});


$factory->define(App\Models\Middle\Web\Family::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"updated_by" => function () {
			return factory(App\Models\Middle\Web\User::class)->create()->id;
		},
		"name" => $faker->word,
	];
});


$factory->define(App\Models\Middle\Web\Fcf::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"year" => $faker->randomDigitNotNull,
		"FCF" => $faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = NULL),
	];
});


$factory->define(App\Models\Middle\Web\Fund::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"IDDeal" => $faker->randomDigitNotNull,
		"Name" => $faker->word,
		"Vintage" => $faker->randomDigitNotNull,
		"DPI" => $faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = NULL),
		"TVPI" => $faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = NULL),
		"TargetIRR" => $faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = NULL),
		"TargetMOM" => $faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = NULL),
		"Comments" => $faker->paragraph,
	];
});


$factory->define(App\Models\Middle\Web\Meetingable::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"meeting_id" => $faker->randomDigitNotNull,
		"meetingable_id" => $faker->randomDigitNotNull,
		"meetingable_type" => $faker->word,
	];
});


$factory->define(App\Models\Middle\Web\Meeting::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"provider_id" => $faker->randomDigitNotNull,
		"user_id" => $faker->randomDigitNotNull,
		"external_id" => $faker->paragraph,
		"Type" => $faker->randomDigitNotNull,
	];
});


$factory->define(App\Models\Middle\Web\Meetingstype::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"Description" => $faker->word,
	];
});


$factory->define(App\Models\Middle\Web\Migration::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"migration" => $faker->word,
		"batch" => $faker->randomDigitNotNull,
	];
});


$factory->define(App\Models\Middle\Web\Operation::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"created_by" => function () {
			return factory(App\Models\Middle\Web\User::class)->create()->id;
		},
		"currency_id" => $faker->randomElement($array = ["1","2","3"]),
		"from_account_id" => function () {
			return factory(App\Models\Middle\Web\Account::class)->create()->id;
		},
		"from_share_id" => function () {
			return factory(App\Models\Middle\Web\Share::class)->create()->id;
		},
		"reconciled_by" => function () {
			return factory(App\Models\Middle\Web\User::class)->create()->id;
		},
		"to_account_id" => function () {
			return factory(App\Models\Middle\Web\Account::class)->create()->id;
		},
		"to_share_id" => function () {
			return factory(App\Models\Middle\Web\Share::class)->create()->id;
		},
		"type_id" => $faker->randomElement($array = ["1","2","3","4","5"]),
		"updated_by" => function () {
			return factory(App\Models\Middle\Web\User::class)->create()->id;
		},
		"validated_by" => function () {
			return factory(App\Models\Middle\Web\User::class)->create()->id;
		},
		"date" => $faker->dateTimeBetween($startDate = "-30 years", $endDate = "now", $timezone = date_default_timezone_get()),
		"number_of_shares" => $faker->randomDigitNotNull,
		"commitment" => $faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = NULL),
		"cash_transfert" => $faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = NULL),
		"spot_currency" => $faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = NULL),
		"title" => $faker->word,
		"class" => $faker->word,
		"call_sent_to_client" => $faker->boolean($chanceOfGettingTrue = 50),
		"call_sent_to_client_on" => $faker->dateTimeBetween($startDate = "-30 years", $endDate = "now", $timezone = date_default_timezone_get()),
		"is_complete" => $faker->boolean($chanceOfGettingTrue = 50),
		"is_valid" => $faker->boolean($chanceOfGettingTrue = 50),
		"validated_date" => $faker->dateTimeBetween($startDate = "-30 years", $endDate = "now", $timezone = date_default_timezone_get()),
		"is_reconciled" => $faker->boolean($chanceOfGettingTrue = 50),
		"reconciled_date" => $faker->dateTimeBetween($startDate = "-30 years", $endDate = "now", $timezone = date_default_timezone_get()),
		"notes" => $faker->paragraph,
	];
});


$factory->define(App\Models\Middle\Web\Partner::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"deals_id" => $faker->randomDigitNotNull,
		"Partner" => $faker->word,
	];
});


$factory->define(App\Models\Middle\Web\PasswordReset::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"email" => $faker->word,
		"token" => $faker->word,
	];
});


$factory->define(App\Models\Middle\Web\Performance::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"update_id" => function () {
			return factory(App\Models\Middle\Web\Update::class)->create()->id;
		},
		"updated_by" => function () {
			return factory(App\Models\Middle\Web\User::class)->create()->id;
		},
		"cash_flow_date" => $faker->dateTimeBetween($startDate = "-30 years", $endDate = "now", $timezone = date_default_timezone_get()),
		"gross_multiple" => $faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = NULL),
		"gross_irr" => $faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = NULL),
		"net_multiple" => $faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = NULL),
		"net_irr" => $faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = NULL),
		"discount" => $faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = NULL),
		"comments" => $faker->paragraph,
		"source" => $faker->word,
		"cash_flow" => $faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = NULL),
		"notes" => $faker->paragraph,
	];
});


$factory->define(App\Models\Middle\Web\Permission_role::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"permission_id" => $faker->randomDigitNotNull,
		"role_id" => $faker->randomDigitNotNull,
	];
});


$factory->define(App\Models\Middle\Web\Permission::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"name" => $faker->word,
		"label" => $faker->word,
	];
});


$factory->define(App\Models\Middle\Web\Profile::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"update_id" => function () {
			return factory(App\Models\Middle\Web\Update::class)->create()->id;
		},
		"updated_by" => function () {
			return factory(App\Models\Middle\Web\User::class)->create()->id;
		},
		"cash_flow_date" => $faker->dateTimeBetween($startDate = "-30 years", $endDate = "now", $timezone = date_default_timezone_get()),
		"type" => $faker->word,
		"cash_flow" => $faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = NULL),
		"notes" => $faker->paragraph,
	];
});


$factory->define(App\Models\Middle\Web\Provider::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"name" => $faker->word,
		"is_task_manager" => $faker->boolean($chanceOfGettingTrue = 50),
		"is_contact_manager" => $faker->boolean($chanceOfGettingTrue = 50),
		"is_mail_manager" => $faker->boolean($chanceOfGettingTrue = 50),
		"is_calendar_manager" => $faker->boolean($chanceOfGettingTrue = 50),
	];
});


$factory->define(App\Models\Middle\Web\Region::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"updated_by" => $faker->randomDigitNotNull,
		"name" => $faker->word,
	];
});


$factory->define(App\Models\Middle\Web\Role_user::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"user_id" => $faker->randomDigitNotNull,
		"role_id" => $faker->randomDigitNotNull,
	];
});


$factory->define(App\Models\Middle\Web\Role::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"name" => $faker->word,
		"label" => $faker->word,
	];
});


$factory->define(App\Models\Middle\Web\ShareValuation::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"share_id" => function () {
			return factory(App\Models\Middle\Web\Share::class)->create()->id;
		},
		"updated_by" => function () {
			return factory(App\Models\Middle\Web\User::class)->create()->id;
		},
		"date_received" => $faker->dateTimeBetween($startDate = "-30 years", $endDate = "now", $timezone = date_default_timezone_get()),
		"dateval" => $faker->dateTimeBetween($startDate = "-30 years", $endDate = "now", $timezone = date_default_timezone_get()),
		"value" => $faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = NULL),
		"currency" => $faker->word,
	];
});


$factory->define(App\Models\Middle\Web\Share::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"updated_by" => function () {
			return factory(App\Models\Middle\Web\User::class)->create()->id;
		},
		"vehicle_id" => function () {
			return factory(App\Models\Middle\Web\Vehicle::class)->create()->id;
		},
		"name" => $faker->word,
		"type" => $faker->word,
		"nominal_value" => $faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = NULL),
		"total_shares_number" => $faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = NULL),
		"notes" => $faker->paragraph,
		"reporting_notes" => $faker->paragraph,
		"fees" => $faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = NULL),
		"carried" => $faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = NULL),
		"currency_id" => $faker->randomElement($array = ["1","2","3"]),
	];
});


$factory->define(App\Models\Middle\Web\Subscription::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"user_id" => $faker->randomDigitNotNull,
		"id" => $faker->word,
		"type" => $faker->word,
	];
});


$factory->define(App\Models\Middle\Web\Taskable::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"task_id" => $faker->randomDigitNotNull,
		"taskable_id" => $faker->randomDigitNotNull,
		"taskable_type" => $faker->word,
	];
});


$factory->define(App\Models\Middle\Web\Task::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"provider_id" => $faker->randomDigitNotNull,
		"user_id" => $faker->randomDigitNotNull,
		"external_id" => $faker->paragraph,
	];
});


$factory->define(App\Models\Middle\Web\Team::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"Teamname" => $faker->word,
	];
});


$factory->define(App\Models\Middle\Web\Teamuser::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"IDteam" => $faker->randomDigitNotNull,
		"IDusers" => $faker->randomDigitNotNull,
	];
});


$factory->define(App\Models\Middle\Web\Token::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"provider_id" => $faker->randomDigitNotNull,
		"user_id" => $faker->randomDigitNotNull,
		"access_token" => $faker->paragraph,
		"refresh_token" => $faker->paragraph,
	];
});


$factory->define(App\Models\Middle\Web\Update::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"updated_by" => function () {
			return factory(App\Models\Middle\Web\User::class)->create()->id;
		},
		"vehicle_id" => function () {
			return factory(App\Models\Middle\Web\Vehicle::class)->create()->id;
		},
		"date_reference" => $faker->dateTimeBetween($startDate = "-30 years", $endDate = "now", $timezone = date_default_timezone_get()),
		"date_recieved" => $faker->dateTimeBetween($startDate = "-30 years", $endDate = "now", $timezone = date_default_timezone_get()),
		"type" => $faker->word,
		"title" => $faker->word,
		"source" => $faker->word,
		"notes" => $faker->paragraph,
		"financials" => $faker->paragraph,
	];
});


$factory->define(App\Models\Middle\Web\Userable::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"user_id" => $faker->randomDigitNotNull,
		"userable_id" => $faker->randomDigitNotNull,
		"userable_type" => $faker->word,
		"external_contact_id" => $faker->randomDigitNotNull,
	];
});


$factory->define(App\Models\Middle\Web\User::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"client_id" => $faker->randomDigitNotNull,
		"contact_provider" => $faker->randomDigitNotNull,
		"event_provider" => $faker->randomDigitNotNull,
		"mail_provider" => $faker->randomDigitNotNull,
		"task_provider" => $faker->randomDigitNotNull,
		"surname" => $faker->word,
		"name" => $faker->word,
		"nickname" => $faker->word,
		"birthdate" => $faker->dateTimeBetween($startDate = "-30 years", $endDate = "now", $timezone = date_default_timezone_get()),
		"email" => $faker->word,
		"address" => $faker->word,
		"zip" => $faker->word,
		"city" => $faker->word,
		"country" => $faker->word,
		"password" => $faker->word,
		"remember_token" => $faker->word,
		"stripe_active" => $faker->boolean($chanceOfGettingTrue = 50),
		"stripe_id" => $faker->word,
		"stripe_subscription" => $faker->word,
		"stripe_plan" => $faker->word,
		"last_four" => $faker->word,
		"trial_ends_at" => $faker->dateTimeBetween($startDate = "-30 years", $endDate = "now", $timezone = date_default_timezone_get()),
		"subscription_ends_at" => $faker->dateTimeBetween($startDate = "-30 years", $endDate = "now", $timezone = date_default_timezone_get()),
	];
});


$factory->define(App\Models\Middle\Web\Vehicle::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"family_id" => function () {
			return factory(App\Models\Middle\Web\Family::class)->create()->id;
		},
		"updated_by" => function () {
			return factory(App\Models\Middle\Web\User::class)->create()->id;
		},
		"name" => $faker->word,
		"managed" => $faker->boolean($chanceOfGettingTrue = 50),
		"class" => $faker->word,
		"subcategory" => $faker->word,
		"active" => $faker->boolean($chanceOfGettingTrue = 50),
		"creation_date" => $faker->dateTimeBetween($startDate = "-30 years", $endDate = "now", $timezone = date_default_timezone_get()),
		"duration" => $faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = NULL),
		"legal_form" => $faker->word,
		"domiciliation" => $faker->word,
		"fiscal_year_end_date" => $faker->dateTimeBetween($startDate = "-30 years", $endDate = "now", $timezone = date_default_timezone_get()),
		"tax_residence" => $faker->word,
		"nationality" => $faker->word,
		"tax_regime" => $faker->word,
		"mandate_type" => $faker->word,
		"id_number" => $faker->word,
		"id_date" => $faker->dateTimeBetween($startDate = "-30 years", $endDate = "now", $timezone = date_default_timezone_get()),
		"professional" => $faker->boolean($chanceOfGettingTrue = 50),
		"mif_profile" => $faker->word,
		"fatca" => $faker->word,
		"activities" => $faker->paragraph,
		"asset_name" => $faker->word,
		"shareholders" => $faker->word,
		"lead" => $faker->word,
		"investment_type" => $faker->word,
		"contract_number" => $faker->word,
		"interest_rate" => $faker->word,
		"notes" => $faker->word,
		"dealsterm_id" => function () {
			return factory(App\Models\Middle\Web\Dealsterm::class)->create()->idDealsTerm;
		},
		"dealsstage_id" => function () {
			return factory(App\Models\Middle\Web\Dealsstage::class)->create()->idDealsStage;
		},
		"dealscategory_id" => function () {
			return factory(App\Models\Middle\Web\Dealscategory::class)->create()->idDealsCategories;
		},
		"vehicle_type_id" => $faker->randomElement($array = ["1","2","3","4"]),
	];
});


$factory->define(App\Models\Middle\Web\VehiclesCurrenciesAllotment::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"currency_id" => $faker->randomElement($array = ["1","2","3"]),
		"updated_by" => function () {
			return factory(App\Models\Middle\Web\User::class)->create()->id;
		},
		"vehicle_id" => function () {
			return factory(App\Models\Middle\Web\Vehicle::class)->create()->id;
		},
		"date" => $faker->dateTimeBetween($startDate = "-30 years", $endDate = "now", $timezone = date_default_timezone_get()),
		"pourcentage" => $faker->randomDigitNotNull,
	];
});


$factory->define(App\Models\Middle\Web\VehiclesRegionsAllotment::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"region_id" => function () {
			return factory(App\Models\Middle\Web\Region::class)->create()->id;
		},
		"updated_by" => function () {
			return factory(App\Models\Middle\Web\User::class)->create()->id;
		},
		"vehicle_id" => function () {
			return factory(App\Models\Middle\Web\Vehicle::class)->create()->id;
		},
		"date" => $faker->dateTimeBetween($startDate = "-30 years", $endDate = "now", $timezone = date_default_timezone_get()),
		"pourcentage" => $faker->randomDigitNotNull,
	];
});


$factory->define(App\Models\Middle\Web\VehiclesRisksAllotment::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create("fr_FR");
	return [
		"updated_by" => function () {
			return factory(App\Models\Middle\Web\User::class)->create()->id;
		},
		"vehicle_id" => function () {
			return factory(App\Models\Middle\Web\Vehicle::class)->create()->id;
		},
		"date" => $faker->dateTimeBetween($startDate = "-30 years", $endDate = "now", $timezone = date_default_timezone_get()),
		"name" => $faker->word,
		"pourcentage" => $faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = NULL),
	];
});


