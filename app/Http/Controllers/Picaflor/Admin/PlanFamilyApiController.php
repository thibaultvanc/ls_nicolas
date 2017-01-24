<?php
namespace App\Http\Controllers\Picaflor\Admin;

use View;
use Flash;
use Redirect;
use Response;
use App\User;
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
use App\Models\Picaflor\Admin\PlanFamily;
use App\Models\Picaflor\Admin\Transaction;
use App\Models\Picaflor\Admin\Organization;
use App\Models\Picaflor\Admin\Subscription;

class PlanFamilyApiController extends Controller
{

	public function index()
	{
$plan_families = PlanFamily::orderBy('updated_at', 'desc')->get();
		return response(['data' => $plan_families, 'status' => 'success', 'message'=>'']);

	}

public function plans(Request $request, PlanFamily $plan_family)
	{
		$plans = $plan_family->plans;
		$plans -> load('site', 'plan_family', 'currency', 'plan_period', 'role', 'plan_type');
		return response(['data' => $plans, 'status' => 'success', 'message'=>'']);

	}

	public function update(Request $request,PlanFamily $plan_family)
	{
		$this->validate($request, [
			'name'=>'required',
			'slug'=>'required',
		]);

		if ($plan_family->update($request->all())) {
;

			return response(['data' => $plan_family, 'status' => 'success', 'message'=>'successfully updated']);

		}else {
			return response(['data' => '', 'status' => 'error', 'message'=>'Error while updating']);
		}
	}

	public function show($plan_family)
	{
			$plan_family=PlanFamily::find($plan_family);

		return response(['data' => $plan_family, 'status' => 'success', 'message'=>'']);
	}

	public function store(Request $request, PlanFamily $plan_family)
	{
		$this->validate($request, [
			'name'=>'required',
			'slug'=>'required',
		]);

		$plan_family=PlanFamily::create($request->all());

		return response(['data' => $plan_family, 'status' => 'success', 'message'=>'successfully created']);
	}

	public function destroy($plan_family)
	{
			$plan_family=PlanFamily::find($plan_family);
		$plan_family->delete();

		return response(['data' => true, 'status' => 'success', 'message'=>'successfully deleted']);
	}

	public function deleteMany(Request $request)
	{
		$response = 		PlanFamily::destroy($request->all());
		return response(['data' => $response, 'status' => 'success', 'message'=>'successfully deleted']);
	}

}

