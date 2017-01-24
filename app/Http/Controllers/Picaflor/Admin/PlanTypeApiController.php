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
use App\Models\Picaflor\Admin\PlanType;
use App\Models\Picaflor\Admin\Invoices;
use App\Models\Picaflor\Admin\BrandUser;
use App\Models\Picaflor\Admin\Permission;
use App\Models\Picaflor\Admin\Transaction;
use App\Models\Picaflor\Admin\Organization;
use App\Models\Picaflor\Admin\Subscription;

class PlanTypeApiController extends Controller
{

	public function index()
	{
$plan_types = PlanType::orderBy('updated_at', 'desc')->get();
		return response(['data' => $plan_types, 'status' => 'success', 'message'=>'']);

	}

public function plans(Request $request, PlanType $plan_type)
	{
		$plans = $plan_type->plans;
		$plans -> load('site', 'plan_family', 'currency', 'plan_period', 'role', 'plan_type');
		return response(['data' => $plans, 'status' => 'success', 'message'=>'']);

	}

	public function update(Request $request,PlanType $plan_type)
	{
		$this->validate($request, [
			'name'=>'required',
		]);

		if ($plan_type->update($request->all())) {
;

			return response(['data' => $plan_type, 'status' => 'success', 'message'=>'successfully updated']);

		}else {
			return response(['data' => '', 'status' => 'error', 'message'=>'Error while updating']);
		}
	}

	public function show($plan_type)
	{
			$plan_type=PlanType::find($plan_type);

		return response(['data' => $plan_type, 'status' => 'success', 'message'=>'']);
	}

	public function store(Request $request, PlanType $plan_type)
	{
		$this->validate($request, [
			'name'=>'required',
		]);

		$plan_type=PlanType::create($request->all());

		return response(['data' => $plan_type, 'status' => 'success', 'message'=>'successfully created']);
	}

	public function destroy($plan_type)
	{
			$plan_type=PlanType::find($plan_type);
		$plan_type->delete();

		return response(['data' => true, 'status' => 'success', 'message'=>'successfully deleted']);
	}

	public function deleteMany(Request $request)
	{
		$response = 		PlanType::destroy($request->all());
		return response(['data' => $response, 'status' => 'success', 'message'=>'successfully deleted']);
	}

}

