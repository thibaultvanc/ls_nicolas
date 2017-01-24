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
use App\Models\Picaflor\Admin\PlanPeriod;
use App\Models\Picaflor\Admin\Transaction;
use App\Models\Picaflor\Admin\Subscription;
use App\Models\Picaflor\Admin\Organization;

class PlanPeriodApiController extends Controller
{

	public function index()
	{
$plan_periods = PlanPeriod::orderBy('updated_at', 'desc')->get();
		return response(['data' => $plan_periods, 'status' => 'success', 'message'=>'']);

	}

public function plans(Request $request, PlanPeriod $plan_period)
	{
		$plans = $plan_period->plans;
		$plans -> load('site', 'plan_family', 'currency', 'plan_period', 'role', 'plan_type');
		return response(['data' => $plans, 'status' => 'success', 'message'=>'']);

	}

	public function update(Request $request,PlanPeriod $plan_period)
	{
		$this->validate($request, [
			'name'=>'required',
			'slug'=>'required',
		]);

		if ($plan_period->update($request->all())) {
;

			return response(['data' => $plan_period, 'status' => 'success', 'message'=>'successfully updated']);

		}else {
			return response(['data' => '', 'status' => 'error', 'message'=>'Error while updating']);
		}
	}

	public function show($plan_period)
	{
			$plan_period=PlanPeriod::find($plan_period);

		return response(['data' => $plan_period, 'status' => 'success', 'message'=>'']);
	}

	public function store(Request $request, PlanPeriod $plan_period)
	{
		$this->validate($request, [
			'name'=>'required',
			'slug'=>'required',
		]);

		$plan_period=PlanPeriod::create($request->all());

		return response(['data' => $plan_period, 'status' => 'success', 'message'=>'successfully created']);
	}

	public function destroy($plan_period)
	{
			$plan_period=PlanPeriod::find($plan_period);
		$plan_period->delete();

		return response(['data' => true, 'status' => 'success', 'message'=>'successfully deleted']);
	}

	public function deleteMany(Request $request)
	{
		$response = 		PlanPeriod::destroy($request->all());
		return response(['data' => $response, 'status' => 'success', 'message'=>'successfully deleted']);
	}

}

