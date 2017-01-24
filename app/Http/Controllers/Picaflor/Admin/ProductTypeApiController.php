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
use App\Models\Picaflor\Admin\Firm;
use App\Models\Picaflor\Admin\Role;
use App\Models\Picaflor\Admin\Plan;
use App\Http\Controllers\Controller;
use App\Models\Picaflor\Admin\Adress;
use App\Models\Picaflor\Admin\Product;
use App\Models\Picaflor\Admin\Invoices;
use App\Models\Picaflor\Admin\BrandUser;
use App\Models\Picaflor\Admin\Permission;
use App\Models\Picaflor\Admin\Transaction;
use App\Models\Picaflor\Admin\ProductType;
use App\Models\Picaflor\Admin\Organization;
use App\Models\Picaflor\Admin\Subscription;

class ProductTypeApiController extends Controller
{

	public function index()
	{
$product_types = ProductType::orderBy('updated_at', 'desc')->get();
		return response(['data' => $product_types, 'status' => 'success', 'message'=>'']);

	}

public function products(Request $request, ProductType $product_type)
	{
		$products = $product_type->products;
		$products -> load('product_type');
		return response(['data' => $products, 'status' => 'success', 'message'=>'']);

	}

	public function update(Request $request,ProductType $product_type)
	{
		$this->validate($request, [
			'name'=>'required',
		]);

		if ($product_type->update($request->all())) {
;

			return response(['data' => $product_type, 'status' => 'success', 'message'=>'successfully updated']);

		}else {
			return response(['data' => '', 'status' => 'error', 'message'=>'Error while updating']);
		}
	}

	public function show($product_type)
	{
			$product_type=ProductType::find($product_type);

		return response(['data' => $product_type, 'status' => 'success', 'message'=>'']);
	}

	public function store(Request $request, ProductType $product_type)
	{
		$this->validate($request, [
			'name'=>'required',
		]);

		$product_type=ProductType::create($request->all());

		return response(['data' => $product_type, 'status' => 'success', 'message'=>'successfully created']);
	}

	public function destroy($product_type)
	{
			$product_type=ProductType::find($product_type);
		$product_type->delete();

		return response(['data' => true, 'status' => 'success', 'message'=>'successfully deleted']);
	}

	public function deleteMany(Request $request)
	{
		$response = 		ProductType::destroy($request->all());
		return response(['data' => $response, 'status' => 'success', 'message'=>'successfully deleted']);
	}

}

