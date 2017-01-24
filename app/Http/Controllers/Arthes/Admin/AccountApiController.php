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
use App\Models\Arthes\Admin\Account;

class AccountApiController extends Controller
{

	public function index()
	{
		$accounts='accounts currencies index';
		return response(['data' => $accounts, 'status' => 'success', 'message'=>'']);

	}

	public function update(Request $request,Account $account)
	{
		$this->validate($request, [
		]);

		$account='accounts currencies update';
if($account){

			return response(['data' => $account, 'status' => 'success', 'message'=>'successfully updated']);

		}else {
			return response(['data' => '', 'status' => 'error', 'message'=>'Error while updating']);
		}
	}

	public function show($account)
	{
		$account='accounts currencies show';

		return response(['data' => $account, 'status' => 'success', 'message'=>'']);
	}

	public function store(Request $request, Account $account)
	{
		$this->validate($request, [
		]);

		$account='accounts currencies store';

		return response(['data' => $account, 'status' => 'success', 'message'=>'successfully created']);
	}

	public function destroy($account)
	{
		$accounts='accounts currencies';

		return response(['data' => true, 'status' => 'success', 'message'=>'successfully deleted']);
	}

	public function deleteMany(Request $request)
	{
		$response='accounts currencies' ;
		return response(['data' => $response, 'status' => 'success', 'message'=>'successfully deleted']);
	}

}

