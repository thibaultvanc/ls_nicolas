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
use App\Models\Picaflor\Admin\Plan;
use App\Models\Picaflor\Admin\Role;
use App\Http\Controllers\Controller;
use App\Models\Picaflor\Admin\Adress;
use App\Models\Picaflor\Admin\Product;
use App\Models\Picaflor\Admin\Invoices;
use App\Models\Picaflor\Admin\BrandUser;
use App\Models\Picaflor\Admin\Permission;
use App\Models\Picaflor\Admin\Transaction;
use App\Models\Picaflor\Admin\Organization;
use App\Models\Picaflor\Admin\Subscription;

class AdressApiController extends Controller
{

public function index()
	{
$adresses = Adress::with(['brandId'])->orderBy('updated_at', 'desc')->get();
		return response(['data' => $adresses, 'status' => 'success', 'message'=>'']);

	}

public function update(Request $request,Adress $adress)
	{
		$this->validate($request, [
			'name'=>'required',
			'brand_id'=>'required',
		]);

		if ($adress->update($request->all())) {
			$adress = $adress-> load('brandId');

			return response(['data' => $adress, 'status' => 'success', 'message'=>'successfully updated']);

		}else {
			return response(['data' => '', 'status' => 'error', 'message'=>'Error while updating']);
		}
	}

public function show($adress)
	{
			$adress=Adress::find($adress)		-> load('brandId');

		return response(['data' => $adress, 'status' => 'success', 'message'=>'']);
	}

public function store(Request $request, Adress $adress)
	{
		$this->validate($request, [
			'name'=>'required',
			'brand_id'=>'required',
		]);

		$adress=Adress::create($request->all())-> load('brandId');

		return response(['data' => $adress, 'status' => 'success', 'message'=>'successfully created']);
	}

	public function destroy($adress)
	{
			$adress=Adress::find($adress);
		$adress->delete();

		return response(['data' => true, 'status' => 'success', 'message'=>'successfully deleted']);
	}

	public function deleteMany(Request $request)
	{
		$response = 		Adress::destroy($request->all());
		return response(['data' => $response, 'status' => 'success', 'message'=>'successfully deleted']);
	}

}

