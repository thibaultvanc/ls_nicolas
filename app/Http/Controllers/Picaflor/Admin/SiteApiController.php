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
use App\Models\Picaflor\Admin\Plan;
use App\Models\Picaflor\Admin\Firm;
use App\Models\Picaflor\Admin\Role;
use App\Models\Picaflor\Admin\Site;
use App\Http\Controllers\Controller;
use App\Models\Picaflor\Admin\Adress;
use App\Models\Picaflor\Admin\Product;
use App\Models\Picaflor\Admin\Invoices;
use App\Models\Picaflor\Admin\BrandUser;
use App\Models\Picaflor\Admin\Permission;
use App\Models\Picaflor\Admin\Transaction;
use App\Models\Picaflor\Admin\Subscription;
use App\Models\Picaflor\Admin\Organization;

class SiteApiController extends Controller
{

	public function index()
	{
$sites = Site::orderBy('updated_at', 'desc')->get();
		return response(['data' => $sites, 'status' => 'success', 'message'=>'']);

	}

public function invoices(Request $request, Site $site)
	{
		$invoices = $site->invoices;
		$invoices -> load('site', 'user', 'currency');
		return response(['data' => $invoices, 'status' => 'success', 'message'=>'']);

	}

	public function plans(Request $request, Site $site)
	{
		$plans = $site->plans;
		$plans -> load('site', 'plan_family', 'currency', 'plan_period', 'role', 'plan_type');
		return response(['data' => $plans, 'status' => 'success', 'message'=>'']);

	}

	public function update(Request $request,Site $site)
	{
		$this->validate($request, [
			'name'=>'required',
		]);

		if ($site->update($request->all())) {
;

			return response(['data' => $site, 'status' => 'success', 'message'=>'successfully updated']);

		}else {
			return response(['data' => '', 'status' => 'error', 'message'=>'Error while updating']);
		}
	}

	public function show($site)
	{
			$site=Site::find($site);

		return response(['data' => $site, 'status' => 'success', 'message'=>'']);
	}

	public function store(Request $request, Site $site)
	{
		$this->validate($request, [
			'name'=>'required',
		]);

		$site=Site::create($request->all());

		return response(['data' => $site, 'status' => 'success', 'message'=>'successfully created']);
	}

	public function destroy($site)
	{
			$site=Site::find($site);
		$site->delete();

		return response(['data' => true, 'status' => 'success', 'message'=>'successfully deleted']);
	}

	public function deleteMany(Request $request)
	{
		$response = 		Site::destroy($request->all());
		return response(['data' => $response, 'status' => 'success', 'message'=>'successfully deleted']);
	}

}

