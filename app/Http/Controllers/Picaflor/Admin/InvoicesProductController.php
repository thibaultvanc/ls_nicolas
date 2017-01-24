<?php
namespace App\Http\Controllers\Picaflor\Admin;

use View;
use Flash;
use App\User;
use Response;
use Redirect;
use Carbon\Carbon;
use App\Http\Requests;
use App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Picaflor\Admin\Site;
use App\Models\Picaflor\Admin\Role;
use App\Models\Picaflor\Admin\Firm;
use App\Models\Picaflor\Admin\Plan;
use App\Http\Controllers\Controller;
use App\Models\Picaflor\Admin\Country;
use App\Models\Picaflor\Admin\Product;
use App\Models\Picaflor\Admin\Currency;
use App\Models\Picaflor\Admin\PlanType;
use App\Models\Picaflor\Admin\FirmType;
use App\Models\Picaflor\Admin\Invoices;
use App\Models\Picaflor\Admin\Permission;
use App\Models\Picaflor\Admin\PlanFamily;
use App\Models\Picaflor\Admin\PlanPeriod;
use App\Models\Picaflor\Admin\ProductType;
use App\Models\Picaflor\Admin\Organization;
use App\Models\Picaflor\Admin\InvoicesProduct;
use App\Models\Picaflor\Admin\PaymentProvider;

class InvoicesProductController extends Controller
{

	public function index()
	{
		$invoices_products = InvoicesProduct::orderBy('updated_at', 'desc')->get();
		return View::make('Picaflor.Admin.InvoicesProduct.index', compact('invoices_products'));
	}

public function show(InvoicesProduct $invoices_product)
	{		return View::make('Picaflor.Admin.InvoicesProduct.show', compact('invoices_product'));
	}

	public function edit(InvoicesProduct $invoices_product)
	{
		return View::make('Picaflor.Admin.InvoicesProduct.edit');
	}
	public function create()
	{
		return View::make('Picaflor.Admin.InvoicesProduct.create');
	}

}

