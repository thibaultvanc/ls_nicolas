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
use App\Models\Arthes\Admin\Person;
use App\Http\Controllers\Controller;

class PersonApiController extends Controller
{

	public function index()
	{
		$people='accounts currencies index';
		return response(['data' => $people, 'status' => 'success', 'message'=>'']);

	}

	public function update(Request $request,Person $person)
	{
		$this->validate($request, [
		]);

		$person='accounts currencies update';
if($person){

			return response(['data' => $person, 'status' => 'success', 'message'=>'successfully updated']);

		}else {
			return response(['data' => '', 'status' => 'error', 'message'=>'Error while updating']);
		}
	}

	public function show($person)
	{
		$person='accounts currencies show';

		return response(['data' => $person, 'status' => 'success', 'message'=>'']);
	}

	public function store(Request $request, Person $person)
	{
		$this->validate($request, [
		]);

		$person='accounts currencies store';

		return response(['data' => $person, 'status' => 'success', 'message'=>'successfully created']);
	}

	public function destroy($person)
	{
		$people='accounts currencies';

		return response(['data' => true, 'status' => 'success', 'message'=>'successfully deleted']);
	}

	public function deleteMany(Request $request)
	{
		$response='accounts currencies' ;
		return response(['data' => $response, 'status' => 'success', 'message'=>'successfully deleted']);
	}

}

