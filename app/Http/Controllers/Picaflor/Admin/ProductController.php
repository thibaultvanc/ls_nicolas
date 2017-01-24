<?php
namespace App\Http\Controllers\Picaflor\Admin;

use View;
use Flash;
use App\User;
use Redirect;
use Response;
use Carbon\Carbon;
use App\Http\Requests;
use App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Picaflor\Admin\Plan;
use App\Models\Picaflor\Admin\Firm;
use App\Models\Picaflor\Admin\Site;
use App\Models\Picaflor\Admin\Role;
use App\Http\Controllers\Controller;
use App\Models\Picaflor\Admin\Product;
use App\Models\Picaflor\Admin\Country;
use App\Models\Picaflor\Admin\Invoices;
use App\Models\Picaflor\Admin\PlanType;
use App\Models\Picaflor\Admin\Currency;
use App\Models\Picaflor\Admin\FirmType;
use App\Models\Picaflor\Admin\Permission;
use App\Models\Picaflor\Admin\PlanPeriod;
use App\Models\Picaflor\Admin\PlanFamily;
use App\Models\Picaflor\Admin\ProductType;
use App\Models\Picaflor\Admin\Organization;
use App\Models\Picaflor\Admin\PaymentProvider;

class ProductController extends Controller
{

	public function index()
	{
		$products = Product::orderBy('updated_at', 'desc')->get();
		return View::make('Picaflor.Admin.Product.index', compact('products'));
	}

public function show(Product $product)
	{
		$product->load(['product_type']);
		return View::make('Picaflor.Admin.Product.show', compact('product'));
	}

	public function edit(Product $product)
	{
		return View::make('Picaflor.Admin.Product.edit');
	}
	public function create()
	{
		$invoices=Invoices::lists("name", "id");
		$product_types=ProductType::lists("name", "id");
		return View::make('Picaflor.Admin.Product.create', compact(['invoices','product_types']));
	}

}

