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
use App\Models\Arthes\Admin\Invoice;

class InvoiceApiController extends Controller
{

	public function index()
	{
		$invoices='accounts currencies index';
		return response(['data' => $invoices, 'status' => 'success', 'message'=>'']);

	}

	public function update(Request $request,Invoice $invoice)
	{
		$this->validate($request, [
			'customer_id'=>'required',
			'currency_id'=>'required',
		]);

		$invoice='accounts currencies update';
if($invoice){

			return response(['data' => $invoice, 'status' => 'success', 'message'=>'successfully updated']);

		}else {
			return response(['data' => '', 'status' => 'error', 'message'=>'Error while updating']);
		}
	}

	public function show($invoice)
	{
		$invoice='accounts currencies show';

		return response(['data' => $invoice, 'status' => 'success', 'message'=>'']);
	}

	public function store(Request $request, Invoice $invoice)
	{
		$this->validate($request, [
			'customer_id'=>'required',
			'currency_id'=>'required',
		]);

		$invoice='accounts currencies store';

		return response(['data' => $invoice, 'status' => 'success', 'message'=>'successfully created']);
	}

	public function destroy($invoice)
	{
		$invoices='accounts currencies';

		return response(['data' => true, 'status' => 'success', 'message'=>'successfully deleted']);
	}

	public function deleteMany(Request $request)
	{
		$response='accounts currencies' ;
		return response(['data' => $response, 'status' => 'success', 'message'=>'successfully deleted']);
	}

}

