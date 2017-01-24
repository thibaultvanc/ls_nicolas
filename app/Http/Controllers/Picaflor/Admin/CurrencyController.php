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
use App\Models\Picaflor\Admin\Firm;
use App\Models\Picaflor\Admin\Site;
use App\Models\Picaflor\Admin\Plan;
use App\Models\Picaflor\Admin\Role;
use App\Http\Controllers\Controller;
use App\Models\Picaflor\Admin\Product;
use App\Models\Picaflor\Admin\Country;
use App\Models\Picaflor\Admin\FirmType;
use App\Models\Picaflor\Admin\Currency;
use App\Models\Picaflor\Admin\PlanType;
use App\Models\Picaflor\Admin\PlanFamily;
use App\Models\Picaflor\Admin\Permission;
use App\Models\Picaflor\Admin\PlanPeriod;
use App\Models\Picaflor\Admin\Organization;

class CurrencyController extends Controller
{

	public function index()
	{
		$currencies = Currency::orderBy('updated_at', 'desc')->get();
		return View::make('Picaflor.Admin.Currency.index', compact('currencies'));
	}

public function show(Currency $currency)
	{		return View::make('Picaflor.Admin.Currency.show', compact('currency'));
	}

	public function edit(Currency $currency)
	{
		return View::make('Picaflor.Admin.Currency.edit');
	}
	public function create()
	{
		return View::make('Picaflor.Admin.Currency.create', compact([]));
	}

}

