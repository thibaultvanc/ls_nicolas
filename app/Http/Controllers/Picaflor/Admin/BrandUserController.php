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
use App\Models\Picaflor\Admin\Role;
use App\Models\Picaflor\Admin\Firm;
use App\Models\Picaflor\Admin\Site;
use App\Models\Picaflor\Admin\Plan;
use App\Http\Controllers\Controller;
use App\Models\Picaflor\Admin\Country;
use App\Models\Picaflor\Admin\Product;
use App\Models\Picaflor\Admin\FirmType;
use App\Models\Picaflor\Admin\Currency;
use App\Models\Picaflor\Admin\PlanType;
use App\Models\Picaflor\Admin\BrandUser;
use App\Models\Picaflor\Admin\Permission;
use App\Models\Picaflor\Admin\PlanFamily;
use App\Models\Picaflor\Admin\PlanPeriod;
use App\Models\Picaflor\Admin\Organization;

class BrandUserController extends Controller
{

	public function index()
	{
		$brand_users = BrandUser::orderBy('updated_at', 'desc')->get();
		return View::make('Picaflor.Admin.BrandUser.index', compact('brand_users'));
	}

public function show(BrandUser $brand_user)
	{
		$brand_user->load(['country']);
		return View::make('Picaflor.Admin.BrandUser.show', compact('brand_user'));
	}

	public function edit(BrandUser $brand_user)
	{
		return View::make('Picaflor.Admin.BrandUser.edit');
	}
	public function create()
	{
		$countries=Country::lists("name", "id");
		return View::make('Picaflor.Admin.BrandUser.create', compact(['countries']));
	}

}

