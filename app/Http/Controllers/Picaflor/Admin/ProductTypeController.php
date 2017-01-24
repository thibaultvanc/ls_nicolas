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
use App\Models\Picaflor\Admin\Role;
use App\Models\Picaflor\Admin\Site;
use App\Models\Picaflor\Admin\Plan;
use App\Models\Picaflor\Admin\Firm;
use App\Http\Controllers\Controller;
use App\Models\Picaflor\Admin\Product;
use App\Models\Picaflor\Admin\Country;
use App\Models\Picaflor\Admin\Invoices;
use App\Models\Picaflor\Admin\Currency;
use App\Models\Picaflor\Admin\PlanType;
use App\Models\Picaflor\Admin\FirmType;
use App\Models\Picaflor\Admin\Permission;
use App\Models\Picaflor\Admin\PlanFamily;
use App\Models\Picaflor\Admin\PlanPeriod;
use App\Models\Picaflor\Admin\ProductType;
use App\Models\Picaflor\Admin\Organization;
use App\Models\Picaflor\Admin\PaymentProvider;

class ProductTypeController extends Controller
{

	public function index()
	{
		$product_types = ProductType::orderBy('updated_at', 'desc')->get();
		return View::make('Picaflor.Admin.ProductType.index', compact('product_types'));
	}

public function show(ProductType $product_type)
	{		return View::make('Picaflor.Admin.ProductType.show', compact('product_type'));
	}

	public function edit(ProductType $product_type)
	{
		return View::make('Picaflor.Admin.ProductType.edit');
	}
	public function create()
	{
		return View::make('Picaflor.Admin.ProductType.create', compact([]));
	}

}

