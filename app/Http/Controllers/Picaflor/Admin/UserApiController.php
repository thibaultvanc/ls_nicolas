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
use App\Http\Controllers\Controller;
use App\Models\Picaflor\Admin\Invoices;
use App\Models\Picaflor\Admin\Organization;
use App\Models\Picaflor\Admin\Subscription;

class UserApiController extends Controller
{

	public function index()
	{
$users = User::orderBy('updated_at', 'desc')->get();
		return response(['data' => $users, 'status' => 'success', 'message'=>'']);

	}

public function subscriptions(Request $request, User $user)
	{
		$subscriptions = $user->subscriptions;
		$subscriptions -> load('user', 'plan');
		return response(['data' => $subscriptions, 'status' => 'success', 'message'=>'']);

	}

	public function invoices(Request $request, User $user)
	{
		$invoices = $user->invoices;
		$invoices -> load('site', 'user', 'currency');
		return response(['data' => $invoices, 'status' => 'success', 'message'=>'']);

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

	public function brands(Request $request, User $user)
	{
		$firms = $user->brands;
		$firms -> load('country', 'firm_type');
		return response(['data' => $firms, 'status' => 'success', 'message'=>'']);

	}

	public function attach_brands(Request $request, User $user)
	{
		$firms = $user->brands()->sync($request->all());

		return response(['data' => $firms, 'status' => 'success', 'message'=>'']);

	}

	public function detach_brands(Request $request, User $user, $firm_id)
	{
		$response = $user->brands()->detach([$firm_id]);

		return response(['data' => $response, 'status' => 'success', 'message'=>'']);

	}

	public function organizations(Request $request, User $user)
	{
		$organizations = $user->organizations;

		return response(['data' => $organizations, 'status' => 'success', 'message'=>'']);

	}

	public function attach_organizations(Request $request, User $user)
	{
		$organizations = $user->organizations()->sync($request->all());

		return response(['data' => $organizations, 'status' => 'success', 'message'=>'']);

	}

	public function detach_organizations(Request $request, User $user, $organization_id)
	{
		$response = $user->organizations()->detach([$organization_id]);

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

