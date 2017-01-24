<?php
namespace App\Http\Controllers\Arthes\Admin;

use View;
use Flash;
use Redirect;
use Response;
use Carbon\Carbon;
use App\Http\Requests;
use App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Arthes\Admin\Organization;

class OrganizationApiController extends Controller
{

	public function index()
	{
		$organizations='accounts currencies index';
		return response(['data' => $organizations, 'status' => 'success', 'message'=>'']);

	}

	public function update(Request $request,Organization $organization)
	{
		$this->validate($request, [
		]);

		$organization='accounts currencies update';
if($organization){

			return response(['data' => $organization, 'status' => 'success', 'message'=>'successfully updated']);

		}else {
			return response(['data' => '', 'status' => 'error', 'message'=>'Error while updating']);
		}
	}

	public function show($organization)
	{
		$organization='accounts currencies show';

		return response(['data' => $organization, 'status' => 'success', 'message'=>'']);
	}

	public function store(Request $request, Organization $organization)
	{
		$this->validate($request, [
		]);

		$organization='accounts currencies store';

		return response(['data' => $organization, 'status' => 'success', 'message'=>'successfully created']);
	}

	public function destroy($organization)
	{
		$organizations='accounts currencies';

		return response(['data' => true, 'status' => 'success', 'message'=>'successfully deleted']);
	}

	public function deleteMany(Request $request)
	{
		$response='accounts currencies' ;
		return response(['data' => $response, 'status' => 'success', 'message'=>'successfully deleted']);
	}

}

