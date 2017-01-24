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
use App\Models\Picaflor\Admin\Invoices;
use App\Models\Picaflor\Admin\Permission;
use App\Models\Picaflor\Admin\Subscription;
use App\Models\Picaflor\Admin\Organization;

class RoleApiController extends Controller
{

	public function index()
	{
$roles = Role::orderBy('updated_at', 'desc')->get();
		return response(['data' => $roles, 'status' => 'success', 'message'=>'']);

	}

public function plans(Request $request, Role $role)
	{
		$plans = $role->plans;
		$plans -> load('site', 'plan_family', 'currency', 'plan_period', 'role', 'plan_type');
		return response(['data' => $plans, 'status' => 'success', 'message'=>'']);

	}

	public function users(Request $request, Role $role)
	{
		$users = $role->users;

		return response(['data' => $users, 'status' => 'success', 'message'=>'']);

	}

	public function attach_users(Request $request, Role $role)
	{
		$users = $role->users()->sync($request->all());

		return response(['data' => $users, 'status' => 'success', 'message'=>'']);

	}

	public function detach_users(Request $request, Role $role, $user_id)
	{
		$response = $role->users()->detach([$user_id]);

		return response(['data' => $response, 'status' => 'success', 'message'=>'']);

	}

	public function permissions(Request $request, Role $role)
	{
		$permissions = $role->permissions;

		return response(['data' => $permissions, 'status' => 'success', 'message'=>'']);

	}

	public function attach_permissions(Request $request, Role $role)
	{
		$permissions = $role->permissions()->sync($request->all());

		return response(['data' => $permissions, 'status' => 'success', 'message'=>'']);

	}

	public function detach_permissions(Request $request, Role $role, $permission_id)
	{
		$response = $role->permissions()->detach([$permission_id]);

		return response(['data' => $response, 'status' => 'success', 'message'=>'']);

	}

	public function update(Request $request,Role $role)
	{
		$this->validate($request, [
			'name'=>'required',
		]);

		if ($role->update($request->all())) {
;

			return response(['data' => $role, 'status' => 'success', 'message'=>'successfully updated']);

		}else {
			return response(['data' => '', 'status' => 'error', 'message'=>'Error while updating']);
		}
	}

	public function show($role)
	{
			$role=Role::find($role);

		return response(['data' => $role, 'status' => 'success', 'message'=>'']);
	}

	public function store(Request $request, Role $role)
	{
		$this->validate($request, [
			'name'=>'required',
		]);

		$role=Role::create($request->all());

		return response(['data' => $role, 'status' => 'success', 'message'=>'successfully created']);
	}

	public function destroy($role)
	{
			$role=Role::find($role);
		$role->delete();

		return response(['data' => true, 'status' => 'success', 'message'=>'successfully deleted']);
	}

	public function deleteMany(Request $request)
	{
		$response = 		Role::destroy($request->all());
		return response(['data' => $response, 'status' => 'success', 'message'=>'successfully deleted']);
	}

}

