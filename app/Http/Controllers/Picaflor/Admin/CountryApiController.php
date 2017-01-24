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
use App\Models\Picaflor\Admin\Plan;
use App\Models\Picaflor\Admin\Firm;
use App\Http\Controllers\Controller;
use App\Models\Picaflor\Admin\Adress;
use App\Models\Picaflor\Admin\Country;
use App\Models\Picaflor\Admin\Invoices;
use App\Models\Picaflor\Admin\BrandUser;
use App\Models\Picaflor\Admin\Permission;
use App\Models\Picaflor\Admin\Subscription;
use App\Models\Picaflor\Admin\Organization;

class CountryApiController extends Controller
{

	public function index()
	{
$countries = Country::orderBy('updated_at', 'desc')->get();
		return response(['data' => $countries, 'status' => 'success', 'message'=>'']);

	}

public function firms(Request $request, Country $country)
	{
		$firms = $country->firms;
		$firms -> load('country', 'firm_type');
		return response(['data' => $firms, 'status' => 'success', 'message'=>'']);

	}

	public function brand_users(Request $request, Country $country)
	{
		$brand_users = $country->brand_users;
		$brand_users -> load('country');
		return response(['data' => $brand_users, 'status' => 'success', 'message'=>'']);

	}

	public function update(Request $request,Country $country)
	{
		$this->validate($request, [
			'name'=>'required',
		]);

		if ($country->update($request->all())) {
;

			return response(['data' => $country, 'status' => 'success', 'message'=>'successfully updated']);

		}else {
			return response(['data' => '', 'status' => 'error', 'message'=>'Error while updating']);
		}
	}

	public function show($country)
	{
			$country=Country::find($country);

		return response(['data' => $country, 'status' => 'success', 'message'=>'']);
	}

	public function store(Request $request, Country $country)
	{
		$this->validate($request, [
			'name'=>'required',
		]);

		$country=Country::create($request->all());

		return response(['data' => $country, 'status' => 'success', 'message'=>'successfully created']);
	}

	public function destroy($country)
	{
			$country=Country::find($country);
		$country->delete();

		return response(['data' => true, 'status' => 'success', 'message'=>'successfully deleted']);
	}

	public function deleteMany(Request $request)
	{
		$response = 		Country::destroy($request->all());
		return response(['data' => $response, 'status' => 'success', 'message'=>'successfully deleted']);
	}

}

