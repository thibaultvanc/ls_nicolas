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
use App\Models\Picaflor\Admin\OrganizationUser;

class OrganizationUserApiController extends Controller
{

	public function index()
	{
$organization_users = OrganizationUser::orderBy('updated_at', 'desc')->get();
		return response(['data' => $organization_users, 'status' => 'success', 'message'=>'']);

	}

	public function update(Request $request,OrganizationUser $organization_user)
	{
		$this->validate($request, [
		]);

		if ($organization_user->update($request->all())) {
;

			return response(['data' => $organization_user, 'status' => 'success', 'message'=>'successfully updated']);

		}else {
			return response(['data' => '', 'status' => 'error', 'message'=>'Error while updating']);
		}
	}

	public function show($organization_user)
	{
			$organization_user=OrganizationUser::find($organization_user);

		return response(['data' => $organization_user, 'status' => 'success', 'message'=>'']);
	}

	public function store(Request $request, OrganizationUser $organization_user)
	{
		$this->validate($request, [
		]);

		$organization_user=OrganizationUser::create($request->all());

		return response(['data' => $organization_user, 'status' => 'success', 'message'=>'successfully created']);
	}

	public function destroy($organization_user)
	{
			$organization_user=OrganizationUser::find($organization_user);
		$organization_user->delete();

		return response(['data' => true, 'status' => 'success', 'message'=>'successfully deleted']);
	}

	public function deleteMany(Request $request)
	{
		$response = 		OrganizationUser::destroy($request->all());
		return response(['data' => $response, 'status' => 'success', 'message'=>'successfully deleted']);
	}

}

