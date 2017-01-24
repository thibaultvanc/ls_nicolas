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
use App\Models\Picaflor\Admin\Invoices;
use App\Models\Picaflor\Admin\Permission;
use App\Models\Picaflor\Admin\Organization;
use App\Models\Picaflor\Admin\Subscription;

class PermissionApiController extends Controller
{

	public function index()
	{
$permissions = Permission::orderBy('updated_at', 'desc')->get();
		return response(['data' => $permissions, 'status' => 'success', 'message'=>'']);

	}

	public function roles(Request $request, Permission $permission)
	{
		$roles = $permission->roles;

		return response(['data' => $roles, 'status' => 'success', 'message'=>'']);

	}

	public function attach_roles(Request $request, Permission $permission)
	{
		$roles = $permission->roles()->sync($request->all());

		return response(['data' => $roles, 'status' => 'success', 'message'=>'']);

	}

	public function detach_roles(Request $request, Permission $permission, $role_id)
	{
		$response = $permission->roles()->detach([$role_id]);

		return response(['data' => $response, 'status' => 'success', 'message'=>'']);

	}

	public function update(Request $request,Permission $permission)
	{
		$this->validate($request, [
			'name'=>'required',
		]);

		if ($permission->update($request->all())) {
;

			return response(['data' => $permission, 'status' => 'success', 'message'=>'successfully updated']);

		}else {
			return response(['data' => '', 'status' => 'error', 'message'=>'Error while updating']);
		}
	}

	public function show($permission)
	{
			$permission=Permission::find($permission);

		return response(['data' => $permission, 'status' => 'success', 'message'=>'']);
	}

	public function store(Request $request, Permission $permission)
	{
		$this->validate($request, [
			'name'=>'required',
		]);

		$permission=Permission::create($request->all());

		return response(['data' => $permission, 'status' => 'success', 'message'=>'successfully created']);
	}

	public function destroy($permission)
	{
			$permission=Permission::find($permission);
		$permission->delete();

		return response(['data' => true, 'status' => 'success', 'message'=>'successfully deleted']);
	}

	public function deleteMany(Request $request)
	{
		$response = 		Permission::destroy($request->all());
		return response(['data' => $response, 'status' => 'success', 'message'=>'successfully deleted']);
	}

}

