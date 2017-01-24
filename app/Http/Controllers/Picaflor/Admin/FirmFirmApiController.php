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
use App\Models\Picaflor\Admin\FirmFirm;
use App\Models\Picaflor\Admin\BrandUser;
use App\Models\Picaflor\Admin\Permission;
use App\Models\Picaflor\Admin\Transaction;
use App\Models\Picaflor\Admin\Organization;
use App\Models\Picaflor\Admin\Subscription;

class FirmFirmApiController extends Controller
{

	public function index()
	{
$firm_firms = FirmFirm::orderBy('updated_at', 'desc')->get();
		return response(['data' => $firm_firms, 'status' => 'success', 'message'=>'']);

	}

	public function update(Request $request,FirmFirm $firm_firm)
	{
		$this->validate($request, [
		]);

		if ($firm_firm->update($request->all())) {
;

			return response(['data' => $firm_firm, 'status' => 'success', 'message'=>'successfully updated']);

		}else {
			return response(['data' => '', 'status' => 'error', 'message'=>'Error while updating']);
		}
	}

	public function show($firm_firm)
	{
			$firm_firm=FirmFirm::find($firm_firm);

		return response(['data' => $firm_firm, 'status' => 'success', 'message'=>'']);
	}

	public function store(Request $request, FirmFirm $firm_firm)
	{
		$this->validate($request, [
		]);

		$firm_firm=FirmFirm::create($request->all());

		return response(['data' => $firm_firm, 'status' => 'success', 'message'=>'successfully created']);
	}

	public function destroy($firm_firm)
	{
			$firm_firm=FirmFirm::find($firm_firm);
		$firm_firm->delete();

		return response(['data' => true, 'status' => 'success', 'message'=>'successfully deleted']);
	}

	public function deleteMany(Request $request)
	{
		$response = 		FirmFirm::destroy($request->all());
		return response(['data' => $response, 'status' => 'success', 'message'=>'successfully deleted']);
	}

}

