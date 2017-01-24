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
use App\Models\Picaflor\Admin\Role;
use App\Models\Picaflor\Admin\Plan;
use App\Http\Controllers\Controller;
use App\Models\Picaflor\Admin\Adress;
use App\Models\Picaflor\Admin\Product;
use App\Models\Picaflor\Admin\Invoices;
use App\Models\Picaflor\Admin\FirmType;
use App\Models\Picaflor\Admin\BrandUser;
use App\Models\Picaflor\Admin\Permission;
use App\Models\Picaflor\Admin\Transaction;
use App\Models\Picaflor\Admin\Organization;
use App\Models\Picaflor\Admin\Subscription;

class FirmTypeApiController extends Controller
{

	public function index()
	{
$firm_types = FirmType::orderBy('updated_at', 'desc')->get();
		return response(['data' => $firm_types, 'status' => 'success', 'message'=>'']);

	}

public function firms(Request $request, FirmType $firm_type)
	{
		$firms = $firm_type->firms;
		$firms -> load('country', 'firm_type');
		return response(['data' => $firms, 'status' => 'success', 'message'=>'']);

	}

	public function update(Request $request,FirmType $firm_type)
	{
		$this->validate($request, [
			'name'=>'required',
		]);

		if ($firm_type->update($request->all())) {
;

			return response(['data' => $firm_type, 'status' => 'success', 'message'=>'successfully updated']);

		}else {
			return response(['data' => '', 'status' => 'error', 'message'=>'Error while updating']);
		}
	}

	public function show($firm_type)
	{
			$firm_type=FirmType::find($firm_type);

		return response(['data' => $firm_type, 'status' => 'success', 'message'=>'']);
	}

	public function store(Request $request, FirmType $firm_type)
	{
		$this->validate($request, [
			'name'=>'required',
		]);

		$firm_type=FirmType::create($request->all());

		return response(['data' => $firm_type, 'status' => 'success', 'message'=>'successfully created']);
	}

	public function destroy($firm_type)
	{
			$firm_type=FirmType::find($firm_type);
		$firm_type->delete();

		return response(['data' => true, 'status' => 'success', 'message'=>'successfully deleted']);
	}

	public function deleteMany(Request $request)
	{
		$response = 		FirmType::destroy($request->all());
		return response(['data' => $response, 'status' => 'success', 'message'=>'successfully deleted']);
	}

}

