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
use App\Models\Picaflor\Admin\Invoices;
use App\Models\Picaflor\Admin\BrandUser;
use App\Models\Picaflor\Admin\Permission;
use App\Models\Picaflor\Admin\Organization;
use App\Models\Picaflor\Admin\Subscription;

class BrandUserApiController extends Controller
{

public function index()
	{
$brand_users = BrandUser::with(['country'])->orderBy('updated_at', 'desc')->get();
		return response(['data' => $brand_users, 'status' => 'success', 'message'=>'']);

	}

public function update(Request $request,BrandUser $brand_user)
	{
		$this->validate($request, [
			'brand_id'=>'required',
			'user_id'=>'required',
			'country_id'=>'required',
		]);

		if ($brand_user->update($request->all())) {
			$brand_user = $brand_user-> load('country');

			return response(['data' => $brand_user, 'status' => 'success', 'message'=>'successfully updated']);

		}else {
			return response(['data' => '', 'status' => 'error', 'message'=>'Error while updating']);
		}
	}

public function show($brand_user)
	{
			$brand_user=BrandUser::find($brand_user)		-> load('country');

		return response(['data' => $brand_user, 'status' => 'success', 'message'=>'']);
	}

public function store(Request $request, BrandUser $brand_user)
	{
		$this->validate($request, [
			'brand_id'=>'required',
			'user_id'=>'required',
			'country_id'=>'required',
		]);

		$brand_user=BrandUser::create($request->all())-> load('country');

		return response(['data' => $brand_user, 'status' => 'success', 'message'=>'successfully created']);
	}

	public function destroy($brand_user)
	{
			$brand_user=BrandUser::find($brand_user);
		$brand_user->delete();

		return response(['data' => true, 'status' => 'success', 'message'=>'successfully deleted']);
	}

	public function deleteMany(Request $request)
	{
		$response = 		BrandUser::destroy($request->all());
		return response(['data' => $response, 'status' => 'success', 'message'=>'successfully deleted']);
	}

}

