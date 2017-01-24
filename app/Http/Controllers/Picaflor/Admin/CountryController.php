<?php
namespace App\Http\Controllers\Picaflor\Admin;

use View;
use Flash;
use Redirect;
use Response;
use App\User;
use Carbon\Carbon;
use App\Http\Requests;
use App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Picaflor\Admin\Site;
use App\Models\Picaflor\Admin\Plan;
use App\Models\Picaflor\Admin\Role;
use App\Models\Picaflor\Admin\Firm;
use App\Http\Controllers\Controller;
use App\Models\Picaflor\Admin\Product;
use App\Models\Picaflor\Admin\Country;
use App\Models\Picaflor\Admin\PlanType;
use App\Models\Picaflor\Admin\Currency;
use App\Models\Picaflor\Admin\FirmType;
use App\Models\Picaflor\Admin\Permission;
use App\Models\Picaflor\Admin\PlanFamily;
use App\Models\Picaflor\Admin\PlanPeriod;
use App\Models\Picaflor\Admin\Organization;

class CountryController extends Controller
{

	public function index()
	{
		$countries = Country::orderBy('updated_at', 'desc')->get();
		return View::make('Picaflor.Admin.Country.index', compact('countries'));
	}

public function show(Country $country)
	{		return View::make('Picaflor.Admin.Country.show', compact('country'));
	}

	public function edit(Country $country)
	{
		return View::make('Picaflor.Admin.Country.edit');
	}
	public function create()
	{
		return View::make('Picaflor.Admin.Country.create', compact([]));
	}

}

