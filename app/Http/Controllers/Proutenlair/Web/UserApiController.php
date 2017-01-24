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
use App\Http\Controllers\Controller;
use App\Models\Proutenlair\Web\User;

class UserApiController extends Controller
{

	public function index()
	{
$users = User::orderBy('updated_at', 'desc')->get();
		return response(['data' => $users, 'status' => 'success', 'message'=>'']);

	}

	public function roles(Request $request, User $user)
	{
		$roles = $user->roles;

		return response(['data' => $roles, 'status' => 'success', 'message'=>'']);

	}

	public function attach_roles(Request $request, User $user)
	{
		$roles = $user->roles()->sync($request->all());

		return response(['data' => $roles, 'status' => 'success', 'message'=>'']);

	}

	public function detach_roles(Request $request, User $user, $role_id)
	{
		$response = $user->roles()->detach([$role_id]);

		return response(['data' => $response, 'status' => 'success', 'message'=>'']);

	}

	public function update(Request $request,User $user)
	{
		$this->validate($request, [
			'firstname'=>'required',
			'lastname'=>'required',
			'email'=>'email',
			'password'=>'confirmed|required|min:6',
		]);

		if ($user->update($request->all())) {
;

			return response(['data' => $user, 'status' => 'success', 'message'=>'successfully updated']);

		}else {
			return response(['data' => '', 'status' => 'error', 'message'=>'Error while updating']);
		}
	}

	public function show($user)
	{
			$user=User::find($user);

		return response(['data' => $user, 'status' => 'success', 'message'=>'']);
	}

	public function store(Request $request, User $user)
	{
		$this->validate($request, [
			'firstname'=>'required',
			'lastname'=>'required',
			'email'=>'email',
			'password'=>'confirmed|required|min:6',
		]);

		$user=User::create($request->all());

		return response(['data' => $user, 'status' => 'success', 'message'=>'successfully created']);
	}

	public function destroy($user)
	{
			$user=User::find($user);
		$user->delete();

		return response(['data' => true, 'status' => 'success', 'message'=>'successfully deleted']);
	}

	public function deleteMany(Request $request)
	{
		$response = 		User::destroy($request->all());
		return response(['data' => $response, 'status' => 'success', 'message'=>'successfully deleted']);
	}

}

