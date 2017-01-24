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
use App\Models\Picaflor\Admin\Organization;
use App\Models\Picaflor\Admin\Subscription;

class InvoicesApiController extends Controller
{

public function index()
	{
$invoices = Invoices::with(['site', 'user', 'currency'])->orderBy('updated_at', 'desc')->get();
		return response(['data' => $invoices, 'status' => 'success', 'message'=>'']);

	}

public function transactions(Request $request, Invoices $invoices)
	{
		$transactions = $invoices->transactions;
		$transactions -> load('invoices', 'payment_provider');
		return response(['data' => $transactions, 'status' => 'success', 'message'=>'']);

	}

	public function products(Request $request, Invoices $invoices)
	{
		$products = $invoices->products;
		$products -> load('product_type');
		return response(['data' => $products, 'status' => 'success', 'message'=>'']);

	}

	public function attach_products(Request $request, Invoices $invoices)
	{
		$products = $invoices->products()->sync($request->all());

		return response(['data' => $products, 'status' => 'success', 'message'=>'']);

	}

	public function detach_products(Request $request, Invoices $invoices, $product_id)
	{
		$response = $invoices->products()->detach([$product_id]);

		return response(['data' => $response, 'status' => 'success', 'message'=>'']);

	}

public function update(Request $request,Invoices $invoices)
	{
		$this->validate($request, [
			'name'=>'required',
			'site_id'=>'required',
			'user_id'=>'required',
			'organization_id'=>'required',
			'zoho_invoice_id'=>'required',
			'currency_id'=>'required',
		]);

		if ($invoices->update($request->all())) {
			$invoices = $invoices-> load('site', 'user', 'currency');

			return response(['data' => $invoices, 'status' => 'success', 'message'=>'successfully updated']);

		}else {
			return response(['data' => '', 'status' => 'error', 'message'=>'Error while updating']);
		}
	}

public function show($invoices)
	{
			$invoices=Invoices::find($invoices)		-> load('site', 'user', 'currency');

		return response(['data' => $invoices, 'status' => 'success', 'message'=>'']);
	}

public function store(Request $request, Invoices $invoices)
	{
		$this->validate($request, [
			'name'=>'required',
			'site_id'=>'required',
			'user_id'=>'required',
			'organization_id'=>'required',
			'zoho_invoice_id'=>'required',
			'currency_id'=>'required',
		]);

		$invoices=Invoices::create($request->all())-> load('site', 'user', 'currency');

		return response(['data' => $invoices, 'status' => 'success', 'message'=>'successfully created']);
	}

	public function destroy($invoices)
	{
			$invoices=Invoices::find($invoices);
		$invoices->delete();

		return response(['data' => true, 'status' => 'success', 'message'=>'successfully deleted']);
	}

	public function deleteMany(Request $request)
	{
		$response = 		Invoices::destroy($request->all());
		return response(['data' => $response, 'status' => 'success', 'message'=>'successfully deleted']);
	}

}

