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
use App\Models\Arthes\Admin\Payment;

class PaymentApiController extends Controller
{

	public function index()
	{
		$payments='accounts currencies index';
		return response(['data' => $payments, 'status' => 'success', 'message'=>'']);

	}

	public function update(Request $request,Payment $payment)
	{
		$this->validate($request, [
		]);

		$payment='accounts currencies update';
if($payment){

			return response(['data' => $payment, 'status' => 'success', 'message'=>'successfully updated']);

		}else {
			return response(['data' => '', 'status' => 'error', 'message'=>'Error while updating']);
		}
	}

	public function show($payment)
	{
		$payment='accounts currencies show';

		return response(['data' => $payment, 'status' => 'success', 'message'=>'']);
	}

	public function store(Request $request, Payment $payment)
	{
		$this->validate($request, [
		]);

		$payment='accounts currencies store';

		return response(['data' => $payment, 'status' => 'success', 'message'=>'successfully created']);
	}

	public function destroy($payment)
	{
		$payments='accounts currencies';

		return response(['data' => true, 'status' => 'success', 'message'=>'successfully deleted']);
	}

	public function deleteMany(Request $request)
	{
		$response='accounts currencies' ;
		return response(['data' => $response, 'status' => 'success', 'message'=>'successfully deleted']);
	}

}

