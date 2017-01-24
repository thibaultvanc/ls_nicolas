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
use App\Models\Picaflor\Admin\Country;
use App\Models\Picaflor\Admin\Product;
use App\Models\Picaflor\Admin\FirmType;
use App\Models\Picaflor\Admin\Invoices;
use App\Models\Picaflor\Admin\Currency;
use App\Models\Picaflor\Admin\PlanType;
use App\Models\Picaflor\Admin\Permission;
use App\Models\Picaflor\Admin\PlanPeriod;
use App\Models\Picaflor\Admin\PlanFamily;
use App\Models\Picaflor\Admin\Organization;
use App\Models\Picaflor\Admin\PaymentProvider;

class InvoicesController extends Controller
{

	public function index()
	{
		$invoices = Invoices::orderBy('updated_at', 'desc')->get();
		return View::make('Picaflor.Admin.Invoices.index', compact('invoices'));
	}

public function show(Invoices $invoices)
	{
		$invoices->load(['site', 'user', 'currency']);
		return View::make('Picaflor.Admin.Invoices.show', compact('invoices'));
	}

	public function edit(Invoices $invoices)
	{
		return View::make('Picaflor.Admin.Invoices.edit');
	}
	public function create()
	{
		$products=Product::lists("name", "id");
		$sites=Site::lists("name", "id");
		$users=User::select(\DB::raw("CONCAT(firstname, ' ', lastname) AS full_name, id"))->lists("full_name", "id");
		$currencies=Currency::lists("name", "id");
		return View::make('Picaflor.Admin.Invoices.create', compact(['products','sites','users','currencies']));
	}

}

