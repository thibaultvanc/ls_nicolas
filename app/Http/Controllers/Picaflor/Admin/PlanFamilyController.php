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
use App\Models\Picaflor\Admin\Plan;
use App\Models\Picaflor\Admin\Site;
use App\Models\Picaflor\Admin\Role;
use App\Http\Controllers\Controller;
use App\Models\Picaflor\Admin\Country;
use App\Models\Picaflor\Admin\Product;
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

class PlanFamilyController extends Controller
{

	public function index()
	{
		$plan_families = PlanFamily::orderBy('updated_at', 'desc')->get();
		return View::make('Picaflor.Admin.PlanFamily.index', compact('plan_families'));
	}

public function show(PlanFamily $plan_family)
	{		return View::make('Picaflor.Admin.PlanFamily.show', compact('plan_family'));
	}

	public function edit(PlanFamily $plan_family)
	{
		return View::make('Picaflor.Admin.PlanFamily.edit');
	}
	public function create()
	{
		return View::make('Picaflor.Admin.PlanFamily.create', compact([]));
	}

}

