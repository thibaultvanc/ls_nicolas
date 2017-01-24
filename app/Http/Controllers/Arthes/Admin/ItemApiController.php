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
use App\Models\Arthes\Admin\Item;
use App\Http\Controllers\Controller;

class ItemApiController extends Controller
{

	public function index()
	{
		$items='accounts currencies index';
		return response(['data' => $items, 'status' => 'success', 'message'=>'']);

	}

	public function update(Request $request,Item $item)
	{
		$this->validate($request, [
		]);

		$item='accounts currencies update';
if($item){

			return response(['data' => $item, 'status' => 'success', 'message'=>'successfully updated']);

		}else {
			return response(['data' => '', 'status' => 'error', 'message'=>'Error while updating']);
		}
	}

	public function show($item)
	{
		$item='accounts currencies show';

		return response(['data' => $item, 'status' => 'success', 'message'=>'']);
	}

	public function store(Request $request, Item $item)
	{
		$this->validate($request, [
		]);

		$item='accounts currencies store';

		return response(['data' => $item, 'status' => 'success', 'message'=>'successfully created']);
	}

	public function destroy($item)
	{
		$items='accounts currencies';

		return response(['data' => true, 'status' => 'success', 'message'=>'successfully deleted']);
	}

	public function deleteMany(Request $request)
	{
		$response='accounts currencies' ;
		return response(['data' => $response, 'status' => 'success', 'message'=>'successfully deleted']);
	}

}

