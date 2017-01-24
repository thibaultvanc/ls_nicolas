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
use App\Models\Picaflor\Admin\PaymentProvider;

class PaymentProviderApiController extends Controller
{

	public function index()
	{
$payment_providers = PaymentProvider::orderBy('updated_at', 'desc')->get();
		return response(['data' => $payment_providers, 'status' => 'success', 'message'=>'']);

	}

public function transactions(Request $request, PaymentProvider $payment_provider)
	{
		$transactions = $payment_provider->transactions;
		$transactions -> load('invoices', 'payment_provider');
		return response(['data' => $transactions, 'status' => 'success', 'message'=>'']);

	}

	public function update(Request $request,PaymentProvider $payment_provider)
	{
		$this->validate($request, [
			'name'=>'required',
		]);

		if ($payment_provider->update($request->all())) {
;

			return response(['data' => $payment_provider, 'status' => 'success', 'message'=>'successfully updated']);

		}else {
			return response(['data' => '', 'status' => 'error', 'message'=>'Error while updating']);
		}
	}

	public function show($payment_provider)
	{
			$payment_provider=PaymentProvider::find($payment_provider);

		return response(['data' => $payment_provider, 'status' => 'success', 'message'=>'']);
	}

	public function store(Request $request, PaymentProvider $payment_provider)
	{
		$this->validate($request, [
			'name'=>'required',
		]);

		$payment_provider=PaymentProvider::create($request->all());

		return response(['data' => $payment_provider, 'status' => 'success', 'message'=>'successfully created']);
	}

	public function destroy($payment_provider)
	{
			$payment_provider=PaymentProvider::find($payment_provider);
		$payment_provider->delete();

		return response(['data' => true, 'status' => 'success', 'message'=>'successfully deleted']);
	}

	public function deleteMany(Request $request)
	{
		$response = 		PaymentProvider::destroy($request->all());
		return response(['data' => $response, 'status' => 'success', 'message'=>'successfully deleted']);
	}

}

