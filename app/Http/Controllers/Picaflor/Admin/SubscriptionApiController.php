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
use App\Models\Picaflor\Admin\Subscription;
use App\Models\Picaflor\Admin\Organization;

class SubscriptionApiController extends Controller
{

public function index()
	{
$subscriptions = Subscription::with(['user', 'plan'])->orderBy('updated_at', 'desc')->get();
		return response(['data' => $subscriptions, 'status' => 'success', 'message'=>'']);

	}

public function update(Request $request,Subscription $subscription)
	{
		$this->validate($request, [
			'name'=>'required',
			'user_id'=>'required',
			'plan_id'=>'required',
			'starts_at'=>'required',
			'ends_at'=>'required',
			'zoho_contact_id'=>'required',
		]);

		if ($subscription->update($request->all())) {
			$subscription = $subscription-> load('user', 'plan');

			return response(['data' => $subscription, 'status' => 'success', 'message'=>'successfully updated']);

		}else {
			return response(['data' => '', 'status' => 'error', 'message'=>'Error while updating']);
		}
	}

public function show($subscription)
	{
			$subscription=Subscription::find($subscription)		-> load('user', 'plan');

		return response(['data' => $subscription, 'status' => 'success', 'message'=>'']);
	}

public function store(Request $request, Subscription $subscription)
	{
		$this->validate($request, [
			'name'=>'required',
			'user_id'=>'required',
			'plan_id'=>'required',
			'starts_at'=>'required',
			'ends_at'=>'required',
			'zoho_contact_id'=>'required',
		]);

		$subscription=Subscription::create($request->all())-> load('user', 'plan');

		return response(['data' => $subscription, 'status' => 'success', 'message'=>'successfully created']);
	}

	public function destroy($subscription)
	{
			$subscription=Subscription::find($subscription);
		$subscription->delete();

		return response(['data' => true, 'status' => 'success', 'message'=>'successfully deleted']);
	}

	public function deleteMany(Request $request)
	{
		$response = 		Subscription::destroy($request->all());
		return response(['data' => $response, 'status' => 'success', 'message'=>'successfully deleted']);
	}

}

