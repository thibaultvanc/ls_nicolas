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
use App\Models\Picaflor\Admin\Product;
use App\Models\Picaflor\Admin\Country;
use App\Models\Picaflor\Admin\FirmType;
use App\Models\Picaflor\Admin\Invoices;
use App\Models\Picaflor\Admin\Currency;
use App\Models\Picaflor\Admin\PlanType;
use App\Models\Picaflor\Admin\PlanFamily;
use App\Models\Picaflor\Admin\PlanPeriod;
use App\Models\Picaflor\Admin\Permission;
use App\Models\Picaflor\Admin\ProductType;
use App\Models\Picaflor\Admin\Organization;
use App\Models\Picaflor\Admin\PaymentProvider;

class PlanController extends Controller
{

	public function index()
	{
		$plans = Plan::orderBy('updated_at', 'desc')->get();
		return View::make('Picaflor.Admin.Plan.index', compact('plans'));
	}

public function show(Plan $plan)
	{
		$plan->load(['site', 'plan_family', 'currency', 'plan_period', 'role', 'plan_type']);
		return View::make('Picaflor.Admin.Plan.show', compact('plan'));
	}

	public function edit(Plan $plan)
	{
		return View::make('Picaflor.Admin.Plan.edit');
	}
	public function create()
	{
		$sites=Site::lists("name", "id");
		$plan_families=PlanFamily::lists("name", "id");
		$currencies=Currency::lists("name", "id");
		$plan_periods=PlanPeriod::lists("name", "id");
		$roles=Role::lists("name", "id");
		$plan_types=PlanType::lists("name", "id");
		return View::make('Picaflor.Admin.Plan.create', compact(['sites','plan_families','currencies','plan_periods','roles','plan_types']));
	}

}

