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
use App\Models\Picaflor\Admin\Plan;
use App\Models\Picaflor\Admin\Site;
use App\Models\Picaflor\Admin\Role;
use App\Models\Picaflor\Admin\Firm;
use App\Http\Controllers\Controller;
use App\Models\Picaflor\Admin\Adress;
use App\Models\Picaflor\Admin\Product;
use App\Models\Picaflor\Admin\Country;
use App\Models\Picaflor\Admin\Currency;
use App\Models\Picaflor\Admin\Invoices;
use App\Models\Picaflor\Admin\PlanType;
use App\Models\Picaflor\Admin\FirmType;
use App\Models\Picaflor\Admin\PlanPeriod;
use App\Models\Picaflor\Admin\Permission;
use App\Models\Picaflor\Admin\PlanFamily;
use App\Models\Picaflor\Admin\ProductType;
use App\Models\Picaflor\Admin\Organization;
use App\Models\Picaflor\Admin\PaymentProvider;

class AdressController extends Controller
{

	public function index()
	{
		$adresses = Adress::orderBy('updated_at', 'desc')->get();
		return View::make('Picaflor.Admin.Adress.index', compact('adresses'));
	}

public function show(Adress $adress)
	{
		$adress->load(['brandId']);
		return View::make('Picaflor.Admin.Adress.show', compact('adress'));
	}

	public function edit(Adress $adress)
	{
		return View::make('Picaflor.Admin.Adress.edit');
	}
	public function create()
	{
		$firms=Firm::lists("name", "id");
		return View::make('Picaflor.Admin.Adress.create', compact(['firms']));
	}

}

