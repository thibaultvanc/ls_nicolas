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
use App\Models\Picaflor\Admin\Role;
use App\Models\Picaflor\Admin\Firm;
use App\Models\Picaflor\Admin\Plan;
use App\Http\Controllers\Controller;
use App\Models\Picaflor\Admin\Adress;
use App\Models\Picaflor\Admin\Product;
use App\Models\Picaflor\Admin\Invoices;
use App\Models\Picaflor\Admin\BrandUser;
use App\Models\Picaflor\Admin\Permission;
use App\Models\Picaflor\Admin\Transaction;
use App\Models\Picaflor\Admin\Organization;
use App\Models\Picaflor\Admin\Subscription;

class ProductApiController extends Controller
{

public function index()
	{
$products = Product::with(['product_type'])->orderBy('updated_at', 'desc')->get();
		return response(['data' => $products, 'status' => 'success', 'message'=>'']);

	}

public function invoices(Request $request, Product $product)
	{
		$invoices = $product->invoices;
		$invoices -> load('site', 'user', 'currency');
		return response(['data' => $invoices, 'status' => 'success', 'message'=>'']);

	}

	public function attach_invoices(Request $request, Product $product)
	{
		$invoices = $product->invoices()->sync($request->all());

		return response(['data' => $invoices, 'status' => 'success', 'message'=>'']);

	}

	public function detach_invoices(Request $request, Product $product, $invoices_id)
	{
		$response = $product->invoices()->detach([$invoices_id]);

		return response(['data' => $response, 'status' => 'success', 'message'=>'']);

	}

public function update(Request $request,Product $product)
	{
		$this->validate($request, [
			'name'=>'required',
			'product_type_id'=>'required',
		]);

		if ($product->update($request->all())) {
			$product = $product-> load('product_type');

			return response(['data' => $product, 'status' => 'success', 'message'=>'successfully updated']);

		}else {
			return response(['data' => '', 'status' => 'error', 'message'=>'Error while updating']);
		}
	}

public function show($product)
	{
			$product=Product::find($product)		-> load('product_type');

		return response(['data' => $product, 'status' => 'success', 'message'=>'']);
	}

public function store(Request $request, Product $product)
	{
		$this->validate($request, [
			'name'=>'required',
			'product_type_id'=>'required',
		]);

		$product=Product::create($request->all())-> load('product_type');

		return response(['data' => $product, 'status' => 'success', 'message'=>'successfully created']);
	}

	public function destroy($product)
	{
			$product=Product::find($product);
		$product->delete();

		return response(['data' => true, 'status' => 'success', 'message'=>'successfully deleted']);
	}

	public function deleteMany(Request $request)
	{
		$response = 		Product::destroy($request->all());
		return response(['data' => $response, 'status' => 'success', 'message'=>'successfully deleted']);
	}

}

