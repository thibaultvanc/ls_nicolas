<?php
namespace App\Http\Controllers\Proutenlair\Web;

use View;
use Flash;
use Redirect;
use Response;
use Carbon\Carbon;
use App\Http\Requests;
use App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Proutenlair\Web\Role;
use App\Models\Proutenlair\Web\User;
use App\Http\Controllers\Controller;
use App\Models\Proutenlair\Web\Permission;
use App\Models\Proutenlair\Web\PermissionRole;

class PermissionRoleApiController extends Controller
{

	public function index()
	{
$permission_roles = PermissionRole::orderBy('updated_at', 'desc')->get();
		return response(['data' => $permission_roles, 'status' => 'success', 'message'=>'']);

	}

	public function update(Request $request,PermissionRole $permission_role)
	{
		$this->validate($request, [
		]);

		if ($permission_role->update($request->all())) {
;

			return response(['data' => $permission_role, 'status' => 'success', 'message'=>'successfully updated']);

		}else {
			return response(['data' => '', 'status' => 'error', 'message'=>'Error while updating']);
		}
	}

	public function show($permission_role)
	{
			$permission_role=PermissionRole::find($permission_role);

		return response(['data' => $permission_role, 'status' => 'success', 'message'=>'']);
	}

	public function store(Request $request, PermissionRole $permission_role)
	{
		$this->validate($request, [
		]);

		$permission_role=PermissionRole::create($request->all());

		return response(['data' => $permission_role, 'status' => 'success', 'message'=>'successfully created']);
	}

	public function destroy($permission_role)
	{
			$permission_role=PermissionRole::find($permission_role);
		$permission_role->delete();

		return response(['data' => true, 'status' => 'success', 'message'=>'successfully deleted']);
	}

	public function deleteMany(Request $request)
	{
		$response = 		PermissionRole::destroy($request->all());
		return response(['data' => $response, 'status' => 'success', 'message'=>'successfully deleted']);
	}

}

