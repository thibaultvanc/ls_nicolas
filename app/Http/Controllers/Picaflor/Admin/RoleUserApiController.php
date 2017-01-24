<?php
namespace App\Http\Controllers\Picaflor\Admin;

use View;
use Flash;
use Redirect;
use Response;
use Carbon\Carbon;
use App\Http\Requests;
use App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Picaflor\Admin\Firm;
use App\Models\Picaflor\Admin\Role;
use App\Http\Controllers\Controller;
use App\Models\Picaflor\Admin\Invoices;
use App\Models\Picaflor\Admin\RoleUser;
use App\Models\Picaflor\Admin\Organization;
use App\Models\Picaflor\Admin\Subscription;

class RoleUserApiController extends Controller
{

	public function index()
	{
$role_users = RoleUser::orderBy('updated_at', 'desc')->get();
		return response(['data' => $role_users, 'status' => 'success', 'message'=>'']);

	}

	public function update(Request $request,RoleUser $role_user)
	{
		$this->validate($request, [
		]);

		if ($role_user->update($request->all())) {
;

			return response(['data' => $role_user, 'status' => 'success', 'message'=>'successfully updated']);

		}else {
			return response(['data' => '', 'status' => 'error', 'message'=>'Error while updating']);
		}
	}

	public function show($role_user)
	{
			$role_user=RoleUser::find($role_user);

		return response(['data' => $role_user, 'status' => 'success', 'message'=>'']);
	}

	public function store(Request $request, RoleUser $role_user)
	{
		$this->validate($request, [
		]);

		$role_user=RoleUser::create($request->all());

		return response(['data' => $role_user, 'status' => 'success', 'message'=>'successfully created']);
	}

	public function destroy($role_user)
	{
			$role_user=RoleUser::find($role_user);
		$role_user->delete();

		return response(['data' => true, 'status' => 'success', 'message'=>'successfully deleted']);
	}

	public function deleteMany(Request $request)
	{
		$response = 		RoleUser::destroy($request->all());
		return response(['data' => $response, 'status' => 'success', 'message'=>'successfully deleted']);
	}

}

