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
use App\Models\Picaflor\Admin\Firm;
use App\Models\Picaflor\Admin\Role;
use App\Models\Picaflor\Admin\Site;
use App\Http\Controllers\Controller;
use App\Models\Picaflor\Admin\Product;
use App\Models\Picaflor\Admin\Country;
use App\Models\Picaflor\Admin\PlanType;
use App\Models\Picaflor\Admin\Invoices;
use App\Models\Picaflor\Admin\Currency;
use App\Models\Picaflor\Admin\FirmType;
use App\Models\Picaflor\Admin\PlanPeriod;
use App\Models\Picaflor\Admin\PlanFamily;
use App\Models\Picaflor\Admin\Permission;
use App\Models\Picaflor\Admin\ProductType;
use App\Models\Picaflor\Admin\Organization;
use App\Models\Picaflor\Admin\PaymentProvider;

class FirmTypeController extends Controller
{

	public function index()
	{
		$firm_types = FirmType::orderBy('updated_at', 'desc')->get();
		return View::make('Picaflor.Admin.FirmType.index', compact('firm_types'));
	}

public function show(FirmType $firm_type)
	{		return View::make('Picaflor.Admin.FirmType.show', compact('firm_type'));
	}

	public function edit(FirmType $firm_type)
	{
		return View::make('Picaflor.Admin.FirmType.edit');
	}
	public function create()
	{
		return View::make('Picaflor.Admin.FirmType.create', compact([]));
	}

}

