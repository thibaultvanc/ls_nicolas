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
use App\Models\Picaflor\Admin\Site;
use App\Models\Picaflor\Admin\Plan;
use App\Models\Picaflor\Admin\Role;
use App\Models\Picaflor\Admin\Firm;
use App\Http\Controllers\Controller;
use App\Models\Picaflor\Admin\Country;
use App\Models\Picaflor\Admin\Product;
use App\Models\Picaflor\Admin\FirmType;
use App\Models\Picaflor\Admin\PlanType;
use App\Models\Picaflor\Admin\Currency;
use App\Models\Picaflor\Admin\PlanPeriod;
use App\Models\Picaflor\Admin\PlanFamily;
use App\Models\Picaflor\Admin\Permission;
use App\Models\Picaflor\Admin\Organization;

class FirmController extends Controller
{

	public function index()
	{
		$firms = Firm::orderBy('updated_at', 'desc')->get();
		return View::make('Picaflor.Admin.Firm.index', compact('firms'));
	}

public function show(Firm $firm)
	{
		$firm->load(['country', 'firm_type']);
		return View::make('Picaflor.Admin.Firm.show', compact('firm'));
	}

	public function edit(Firm $firm)
	{
		return View::make('Picaflor.Admin.Firm.edit');
	}
	public function create()
	{
		$users=User::select(\DB::raw("CONCAT(firstname, ' ', lastname) AS full_name, id"))->lists("full_name", "id");
		$firms=Firm::lists("name", "id");
		$firms=Firm::lists("name", "id");
		$countries=Country::lists("name", "id");
		$firm_types=FirmType::lists("name", "id");
		return View::make('Picaflor.Admin.Firm.create', compact(['users','firms','firms','countries','firm_types']));
	}

}

