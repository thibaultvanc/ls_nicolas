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
use App\Models\Arthes\Admin\Currency;

class CurrencyApiController extends Controller
{

	public function index()
	{
		$currencies='accounts currencies index';
		return response(['data' => $currencies, 'status' => 'success', 'message'=>'']);

	}

	public function update(Request $request,Currency $currency)
	{
		$this->validate($request, [
			'currency_code'=>'required',
			'currency_name'=>'required',
			'currency_symbol'=>'required',
			'price_precision'=>'required',
		]);

		$currency='accounts currencies update';
if($currency){

			return response(['data' => $currency, 'status' => 'success', 'message'=>'successfully updated']);

		}else {
			return response(['data' => '', 'status' => 'error', 'message'=>'Error while updating']);
		}
	}

	public function show($currency)
	{
		$currency='accounts currencies show';

		return response(['data' => $currency, 'status' => 'success', 'message'=>'']);
	}

	public function store(Request $request, Currency $currency)
	{
		$this->validate($request, [
			'currency_code'=>'required',
			'currency_name'=>'required',
			'currency_symbol'=>'required',
			'price_precision'=>'required',
		]);

		$currency='accounts currencies store';

		return response(['data' => $currency, 'status' => 'success', 'message'=>'successfully created']);
	}

	public function destroy($currency)
	{
		$currencies='accounts currencies';

		return response(['data' => true, 'status' => 'success', 'message'=>'successfully deleted']);
	}

	public function deleteMany(Request $request)
	{
		$response='accounts currencies' ;
		return response(['data' => $response, 'status' => 'success', 'message'=>'successfully deleted']);
	}

}

