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
use App\Models\Picaflor\Admin\Role;
use App\Models\Picaflor\Admin\Plan;
use App\Models\Picaflor\Admin\Site;
use App\Models\Picaflor\Admin\Firm;
use App\Http\Controllers\Controller;
use App\Models\Picaflor\Admin\Product;
use App\Models\Picaflor\Admin\Country;
use App\Models\Picaflor\Admin\FirmFirm;
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

class FirmFirmController extends Controller
{

	public function index()
	{
		$firm_firms = FirmFirm::orderBy('updated_at', 'desc')->get();
		return View::make('Picaflor.Admin.FirmFirm.index', compact('firm_firms'));
	}

public function show(FirmFirm $firm_firm)
	{		return View::make('Picaflor.Admin.FirmFirm.show', compact('firm_firm'));
	}

	public function edit(FirmFirm $firm_firm)
	{
		return View::make('Picaflor.Admin.FirmFirm.edit');
	}
	public function create()
	{
		return View::make('Picaflor.Admin.FirmFirm.create');
	}

}

