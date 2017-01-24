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
use App\Models\Picaflor\Admin\Currency;
use App\Models\Picaflor\Admin\Invoices;
use App\Models\Picaflor\Admin\BrandUser;
use App\Models\Picaflor\Admin\Permission;
use App\Models\Picaflor\Admin\Subscription;
use App\Models\Picaflor\Admin\Organization;

class CurrencyApiController extends Controller
{

	public function index()
	{
$currencies = Currency::orderBy('updated_at', 'desc')->get();
		return response(['data' => $currencies, 'status' => 'success', 'message'=>'']);

	}

public function plans(Request $request, Currency $currency)
	{
		$plans = $currency->plans;
		$plans -> load('site', 'plan_family', 'currency', 'plan_period', 'role', 'plan_type');
		return response(['data' => $plans, 'status' => 'success', 'message'=>'']);

	}

	public function invoices(Request $request, Currency $currency)
	{
		$invoices = $currency->invoices;
		$invoices -> load('site', 'user', 'currency');
		return response(['data' => $invoices, 'status' => 'success', 'message'=>'']);

	}

	public function update(Request $request,Currency $currency)
	{
		$this->validate($request, [
			'name'=>'required',
			'code'=>'required',
		]);

		if ($currency->update($request->all())) {
;

			return response(['data' => $currency, 'status' => 'success', 'message'=>'successfully updated']);

		}else {
			return response(['data' => '', 'status' => 'error', 'message'=>'Error while updating']);
		}
	}

	public function show($currency)
	{
			$currency=Currency::find($currency);

		return response(['data' => $currency, 'status' => 'success', 'message'=>'']);
	}

	public function store(Request $request, Currency $currency)
	{
		$this->validate($request, [
			'name'=>'required',
			'code'=>'required',
		]);

		$currency=Currency::create($request->all());

		return response(['data' => $currency, 'status' => 'success', 'message'=>'successfully created']);
	}

	public function destroy($currency)
	{
			$currency=Currency::find($currency);
		$currency->delete();

		return response(['data' => true, 'status' => 'success', 'message'=>'successfully deleted']);
	}

	public function deleteMany(Request $request)
	{
		$response = 		Currency::destroy($request->all());
		return response(['data' => $response, 'status' => 'success', 'message'=>'successfully deleted']);
	}

}

