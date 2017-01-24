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
use App\Models\Picaflor\Admin\Firm;
use App\Models\Picaflor\Admin\Role;
use App\Models\Picaflor\Admin\Plan;
use App\Models\Picaflor\Admin\Site;
use App\Http\Controllers\Controller;
use App\Models\Picaflor\Admin\Product;
use App\Models\Picaflor\Admin\PlanType;
use App\Models\Picaflor\Admin\Currency;
use App\Models\Picaflor\Admin\Permission;
use App\Models\Picaflor\Admin\PlanPeriod;
use App\Models\Picaflor\Admin\PlanFamily;
use App\Models\Picaflor\Admin\Organization;

class PermissionController extends Controller
{

	public function index()
	{
		$permissions = Permission::orderBy('updated_at', 'desc')->get();
		return View::make('Picaflor.Admin.Permission.index', compact('permissions'));
	}

public function show(Permission $permission)
	{		return View::make('Picaflor.Admin.Permission.show', compact('permission'));
	}

	public function edit(Permission $permission)
	{
		return View::make('Picaflor.Admin.Permission.edit');
	}
	public function create()
	{
		$roles=Role::lists("name", "id");
		return View::make('Picaflor.Admin.Permission.create', compact(['roles']));
	}

}

