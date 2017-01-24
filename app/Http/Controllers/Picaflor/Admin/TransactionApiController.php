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
use App\Models\Picaflor\Admin\Role;
use App\Http\Controllers\Controller;
use App\Models\Picaflor\Admin\Adress;
use App\Models\Picaflor\Admin\Product;
use App\Models\Picaflor\Admin\Invoices;
use App\Models\Picaflor\Admin\BrandUser;
use App\Models\Picaflor\Admin\Permission;
use App\Models\Picaflor\Admin\Transaction;
use App\Models\Picaflor\Admin\Organization;
use App\Models\Picaflor\Admin\Subscription;

class TransactionApiController extends Controller
{

public function index()
	{
$transactions = Transaction::with(['invoices', 'payment_provider'])->orderBy('updated_at', 'desc')->get();
		return response(['data' => $transactions, 'status' => 'success', 'message'=>'']);

	}

public function update(Request $request,Transaction $transaction)
	{
		$this->validate($request, [
			'name'=>'required',
			'invoices_id'=>'required',
			'payment_provider_id'=>'required',
			'user_id'=>'required',
		]);

		if ($transaction->update($request->all())) {
			$transaction = $transaction-> load('invoices', 'payment_provider');

			return response(['data' => $transaction, 'status' => 'success', 'message'=>'successfully updated']);

		}else {
			return response(['data' => '', 'status' => 'error', 'message'=>'Error while updating']);
		}
	}

public function show($transaction)
	{
			$transaction=Transaction::find($transaction)		-> load('invoices', 'payment_provider');

		return response(['data' => $transaction, 'status' => 'success', 'message'=>'']);
	}

public function store(Request $request, Transaction $transaction)
	{
		$this->validate($request, [
			'name'=>'required',
			'invoices_id'=>'required',
			'payment_provider_id'=>'required',
			'user_id'=>'required',
		]);

		$transaction=Transaction::create($request->all())-> load('invoices', 'payment_provider');

		return response(['data' => $transaction, 'status' => 'success', 'message'=>'successfully created']);
	}

	public function destroy($transaction)
	{
			$transaction=Transaction::find($transaction);
		$transaction->delete();

		return response(['data' => true, 'status' => 'success', 'message'=>'successfully deleted']);
	}

	public function deleteMany(Request $request)
	{
		$response = 		Transaction::destroy($request->all());
		return response(['data' => $response, 'status' => 'success', 'message'=>'successfully deleted']);
	}

}

