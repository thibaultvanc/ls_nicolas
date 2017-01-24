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
use App\Models\Arthes\Admin\Contact;

class ContactApiController extends Controller
{

	public function index()
	{
		$contacts='accounts currencies index';
		return response(['data' => $contacts, 'status' => 'success', 'message'=>'']);

	}

	public function update(Request $request,Contact $contact)
	{
		$this->validate($request, [
			'contact_name'=>'required',
			'currency_id'=>'required',
		]);

		$contact='accounts currencies update';
if($contact){

			return response(['data' => $contact, 'status' => 'success', 'message'=>'successfully updated']);

		}else {
			return response(['data' => '', 'status' => 'error', 'message'=>'Error while updating']);
		}
	}

	public function show($contact)
	{
		$contact='accounts currencies show';

		return response(['data' => $contact, 'status' => 'success', 'message'=>'']);
	}

	public function store(Request $request, Contact $contact)
	{
		$this->validate($request, [
			'contact_name'=>'required',
			'currency_id'=>'required',
		]);

		$contact='accounts currencies store';

		return response(['data' => $contact, 'status' => 'success', 'message'=>'successfully created']);
	}

	public function destroy($contact)
	{
		$contacts='accounts currencies';

		return response(['data' => true, 'status' => 'success', 'message'=>'successfully deleted']);
	}

	public function deleteMany(Request $request)
	{
		$response='accounts currencies' ;
		return response(['data' => $response, 'status' => 'success', 'message'=>'successfully deleted']);
	}

}

