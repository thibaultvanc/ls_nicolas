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
use App\Models\Picaflor\Admin\Subscription;
use App\Models\Picaflor\Admin\Organization;
use App\Models\Picaflor\Admin\InvoicesProduct;

class InvoicesProductApiController extends Controller
{

	public function index()
	{
$invoices_products = InvoicesProduct::orderBy('updated_at', 'desc')->get();
		return response(['data' => $invoices_products, 'status' => 'success', 'message'=>'']);

	}

	public function update(Request $request,InvoicesProduct $invoices_product)
	{
		$this->validate($request, [
			'quantity'=>'required',
		]);

		if ($invoices_product->update($request->all())) {
;

			return response(['data' => $invoices_product, 'status' => 'success', 'message'=>'successfully updated']);

		}else {
			return response(['data' => '', 'status' => 'error', 'message'=>'Error while updating']);
		}
	}

	public function show($invoices_product)
	{
			$invoices_product=InvoicesProduct::find($invoices_product);

		return response(['data' => $invoices_product, 'status' => 'success', 'message'=>'']);
	}

	public function store(Request $request, InvoicesProduct $invoices_product)
	{
		$this->validate($request, [
			'quantity'=>'required',
		]);

		$invoices_product=InvoicesProduct::create($request->all());

		return response(['data' => $invoices_product, 'status' => 'success', 'message'=>'successfully created']);
	}

	public function destroy($invoices_product)
	{
			$invoices_product=InvoicesProduct::find($invoices_product);
		$invoices_product->delete();

		return response(['data' => true, 'status' => 'success', 'message'=>'successfully deleted']);
	}

	public function deleteMany(Request $request)
	{
		$response = 		InvoicesProduct::destroy($request->all());
		return response(['data' => $response, 'status' => 'success', 'message'=>'successfully deleted']);
	}

}

