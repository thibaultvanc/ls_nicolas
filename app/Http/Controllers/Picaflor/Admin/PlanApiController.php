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
use App\Models\Picaflor\Admin\Plan;
use App\Models\Picaflor\Admin\Role;
use App\Http\Controllers\Controller;
use App\Models\Picaflor\Admin\Adress;
use App\Models\Picaflor\Admin\Product;
use App\Models\Picaflor\Admin\Invoices;
use App\Models\Picaflor\Admin\BrandUser;
use App\Models\Picaflor\Admin\Permission;
use App\Models\Picaflor\Admin\Transaction;
use App\Models\Picaflor\Admin\Subscription;
use App\Models\Picaflor\Admin\Organization;

class PlanApiController extends Controller
{

public function index()
	{
$plans = Plan::with(['site', 'plan_family', 'currency', 'plan_period', 'role', 'plan_type'])->orderBy('updated_at', 'desc')->get();
		return response(['data' => $plans, 'status' => 'success', 'message'=>'']);

	}

public function subscriptions(Request $request, Plan $plan)
	{
		$subscriptions = $plan->subscriptions;
		$subscriptions -> load('user', 'plan');
		return response(['data' => $subscriptions, 'status' => 'success', 'message'=>'']);

	}

public function update(Request $request,Plan $plan)
	{
		$this->validate($request, [
			'name'=>'required',
			'site_id'=>'required',
			'plan_family_id'=>'required',
			'currency_id'=>'required',
			'plan_period_id'=>'required',
			'role_id'=>'required',
			'plan_type_id'=>'required',
			'price_ht'=>'required',
		]);

		if ($plan->update($request->all())) {
			$plan = $plan-> load('site', 'plan_family', 'currency', 'plan_period', 'role', 'plan_type');

			return response(['data' => $plan, 'status' => 'success', 'message'=>'successfully updated']);

		}else {
			return response(['data' => '', 'status' => 'error', 'message'=>'Error while updating']);
		}
	}

public function show($plan)
	{
			$plan=Plan::find($plan)		-> load('site', 'plan_family', 'currency', 'plan_period', 'role', 'plan_type');

		return response(['data' => $plan, 'status' => 'success', 'message'=>'']);
	}

public function store(Request $request, Plan $plan)
	{
		$this->validate($request, [
			'name'=>'required',
			'site_id'=>'required',
			'plan_family_id'=>'required',
			'currency_id'=>'required',
			'plan_period_id'=>'required',
			'role_id'=>'required',
			'plan_type_id'=>'required',
			'price_ht'=>'required',
		]);

		$plan=Plan::create($request->all())-> load('site', 'plan_family', 'currency', 'plan_period', 'role', 'plan_type');

		return response(['data' => $plan, 'status' => 'success', 'message'=>'successfully created']);
	}

	public function destroy($plan)
	{
			$plan=Plan::find($plan);
		$plan->delete();

		return response(['data' => true, 'status' => 'success', 'message'=>'successfully deleted']);
	}

	public function deleteMany(Request $request)
	{
		$response = 		Plan::destroy($request->all());
		return response(['data' => $response, 'status' => 'success', 'message'=>'successfully deleted']);
	}

}

