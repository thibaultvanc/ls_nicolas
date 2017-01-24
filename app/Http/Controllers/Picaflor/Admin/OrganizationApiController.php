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
use App\Models\Picaflor\Admin\Plan;
use App\Models\Picaflor\Admin\Role;
use App\Http\Controllers\Controller;
use App\Models\Picaflor\Admin\Adress;
use App\Models\Picaflor\Admin\Product;
use App\Models\Picaflor\Admin\Invoices;
use App\Models\Picaflor\Admin\BrandUser;
use App\Models\Picaflor\Admin\Permission;
use App\Models\Picaflor\Admin\Transaction;
use App\Models\Picaflor\Admin\Organization;
use App\Models\Picaflor\Admin\Subscription;

class OrganizationApiController extends Controller
{

	public function index()
	{
$organizations = Organization::orderBy('updated_at', 'desc')->get();
		return response(['data' => $organizations, 'status' => 'success', 'message'=>'']);

	}

	public function users(Request $request, Organization $organization)
	{
		$users = $organization->users;

		return response(['data' => $users, 'status' => 'success', 'message'=>'']);

	}

	public function attach_users(Request $request, Organization $organization)
	{
		$users = $organization->users()->sync($request->all());

		return response(['data' => $users, 'status' => 'success', 'message'=>'']);

	}

	public function detach_users(Request $request, Organization $organization, $user_id)
	{
		$response = $organization->users()->detach([$user_id]);

		return response(['data' => $response, 'status' => 'success', 'message'=>'']);

	}

	public function update(Request $request,Organization $organization)
	{
		$this->validate($request, [
			'name'=>'required',
		]);

		if ($organization->update($request->all())) {
;

			return response(['data' => $organization, 'status' => 'success', 'message'=>'successfully updated']);

		}else {
			return response(['data' => '', 'status' => 'error', 'message'=>'Error while updating']);
		}
	}

	public function show($organization)
	{
			$organization=Organization::find($organization);

		return response(['data' => $organization, 'status' => 'success', 'message'=>'']);
	}

	public function store(Request $request, Organization $organization)
	{
		$this->validate($request, [
			'name'=>'required',
		]);

		$organization=Organization::create($request->all());

		return response(['data' => $organization, 'status' => 'success', 'message'=>'successfully created']);
	}

	public function destroy($organization)
	{
			$organization=Organization::find($organization);
		$organization->delete();

		return response(['data' => true, 'status' => 'success', 'message'=>'successfully deleted']);
	}

	public function deleteMany(Request $request)
	{
		$response = 		Organization::destroy($request->all());
		return response(['data' => $response, 'status' => 'success', 'message'=>'successfully deleted']);
	}

}

