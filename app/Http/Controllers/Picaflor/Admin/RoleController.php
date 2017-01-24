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
use App\Models\Picaflor\Admin\PlanPeriod;
use App\Models\Picaflor\Admin\PlanFamily;
use App\Models\Picaflor\Admin\Permission;
use App\Models\Picaflor\Admin\Organization;

class RoleController extends Controller
{

	public function index()
	{
		$roles = Role::orderBy('updated_at', 'desc')->get();
		return View::make('Picaflor.Admin.Role.index', compact('roles'));
	}

public function show(Role $role)
	{		return View::make('Picaflor.Admin.Role.show', compact('role'));
	}

	public function edit(Role $role)
	{
		return View::make('Picaflor.Admin.Role.edit');
	}
	public function create()
	{
		$users=User::select(\DB::raw("CONCAT(firstname, ' ', lastname) AS full_name, id"))->lists("full_name", "id");
		$permissions=Permission::lists("name", "id");
		return View::make('Picaflor.Admin.Role.create', compact(['users','permissions']));
	}

}

