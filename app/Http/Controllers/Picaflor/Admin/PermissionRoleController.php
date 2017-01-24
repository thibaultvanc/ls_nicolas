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
use App\Models\Picaflor\Admin\PermissionRole;

class PermissionRoleController extends Controller
{

	public function index()
	{
		$permission_roles = PermissionRole::orderBy('updated_at', 'desc')->get();
		return View::make('Picaflor.Admin.PermissionRole.index', compact('permission_roles'));
	}

public function show(PermissionRole $permission_role)
	{		return View::make('Picaflor.Admin.PermissionRole.show', compact('permission_role'));
	}

	public function edit(PermissionRole $permission_role)
	{
		return View::make('Picaflor.Admin.PermissionRole.edit');
	}
	public function create()
	{
		return View::make('Picaflor.Admin.PermissionRole.create');
	}

}

