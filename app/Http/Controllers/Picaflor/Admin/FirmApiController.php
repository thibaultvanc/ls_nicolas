<?php
namespace App\Http\Controllers\Picaflor\Admin;

use View;
use Flash;
use App\User;
use Redirect;
use Response;
use Carbon\Carbon;
use App\Http\Requests;
use App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Picaflor\Admin\Role;
use App\Models\Picaflor\Admin\Firm;
use App\Models\Picaflor\Admin\Plan;
use App\Http\Controllers\Controller;
use App\Models\Picaflor\Admin\Adress;
use App\Models\Picaflor\Admin\Invoices;
use App\Models\Picaflor\Admin\Permission;
use App\Models\Picaflor\Admin\Organization;
use App\Models\Picaflor\Admin\Subscription;

class FirmApiController extends Controller
{

public function index()
	{
$firms = Firm::with(['country', 'firm_type'])->orderBy('updated_at', 'desc')->get();
		return response(['data' => $firms, 'status' => 'success', 'message'=>'']);

	}

public function adressesBrand(Request $request, Firm $firm)
	{
		$adresses = $firm->adressesBrand;
		$adresses -> load('brandId');
		return response(['data' => $adresses, 'status' => 'success', 'message'=>'']);

	}

	public function users(Request $request, Firm $firm)
	{
		$users = $firm->users;

		return response(['data' => $users, 'status' => 'success', 'message'=>'']);

	}

	public function attach_users(Request $request, Firm $firm)
	{
		$users = $firm->users()->sync($request->all());

		return response(['data' => $users, 'status' => 'success', 'message'=>'']);

	}

	public function detach_users(Request $request, Firm $firm, $user_id)
	{
		$response = $firm->users()->detach([$user_id]);

		return response(['data' => $response, 'status' => 'success', 'message'=>'']);

	}

	public function composedByFirms(Request $request, Firm $firm)
	{
		$firms = $firm->composedByFirms;
		$firms -> load('country', 'firm_type');
		return response(['data' => $firms, 'status' => 'success', 'message'=>'']);

	}

	public function attach_composedByFirms(Request $request, Firm $firm)
	{
		$firms = $firm->composedByFirms()->sync($request->all());

		return response(['data' => $firms, 'status' => 'success', 'message'=>'']);

	}

	public function detach_composedByFirms(Request $request, Firm $firm, $firm_id)
	{
		$response = $firm->composedByFirms()->detach([$firm_id]);

		return response(['data' => $response, 'status' => 'success', 'message'=>'']);

	}

	public function firms(Request $request, Firm $firm)
	{
		$firms = $firm->firms;
		$firms -> load('country', 'firm_type');
		return response(['data' => $firms, 'status' => 'success', 'message'=>'']);

	}

	public function attach_firms(Request $request, Firm $firm)
	{
		$firms = $firm->firms()->sync($request->all());

		return response(['data' => $firms, 'status' => 'success', 'message'=>'']);

	}

	public function detach_firms(Request $request, Firm $firm, $firm_id)
	{
		$response = $firm->firms()->detach([$firm_id]);

		return response(['data' => $response, 'status' => 'success', 'message'=>'']);

	}

public function update(Request $request,Firm $firm)
	{
		$this->validate($request, [
			'name'=>'required',
			'country_id'=>'required',
			'url_site'=>'
|required',
			'url_blog'=>'required',
			'url_facebook'=>'required',
			'firm_name'=>'required',
			'tva_intra'=>'required',
			'firm_type_id'=>'required',
		]);

		if ($firm->update($request->all())) {
			$firm = $firm-> load('country', 'firm_type');

			return response(['data' => $firm, 'status' => 'success', 'message'=>'successfully updated']);

		}else {
			return response(['data' => '', 'status' => 'error', 'message'=>'Error while updating']);
		}
	}

public function show($firm)
	{
			$firm=Firm::find($firm)		-> load('country', 'firm_type');

		return response(['data' => $firm, 'status' => 'success', 'message'=>'']);
	}

public function store(Request $request, Firm $firm)
	{
		$this->validate($request, [
			'name'=>'required',
			'country_id'=>'required',
			'url_site'=>'
|required',
			'url_blog'=>'required',
			'url_facebook'=>'required',
			'firm_name'=>'required',
			'tva_intra'=>'required',
			'firm_type_id'=>'required',
		]);

		$firm=Firm::create($request->all())-> load('country', 'firm_type');

		return response(['data' => $firm, 'status' => 'success', 'message'=>'successfully created']);
	}

	public function destroy($firm)
	{
			$firm=Firm::find($firm);
		$firm->delete();

		return response(['data' => true, 'status' => 'success', 'message'=>'successfully deleted']);
	}

	public function deleteMany(Request $request)
	{
		$response = 		Firm::destroy($request->all());
		return response(['data' => $response, 'status' => 'success', 'message'=>'successfully deleted']);
	}

}

