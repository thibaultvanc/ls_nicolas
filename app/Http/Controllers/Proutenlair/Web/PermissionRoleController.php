<?php
namespace App\Http\Controllers\Proutenlair\Web;

use View;
use Flash;
use Redirect;
use Response;
use Carbon\Carbon;
use App\Http\Requests;
use App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Proutenlair\Web\Role;
use App\Models\Proutenlair\Web\User;
use App\Http\Controllers\Controller;
use App\Models\Proutenlair\Web\Permission;
use App\Models\Proutenlair\Web\PermissionRole;

class PermissionRoleController extends Controller
{

	public function index()
	{
		$permission_roles = PermissionRole::orderBy('updated_at', 'desc')->get();
		return View::make('Proutenlair.Web.PermissionRole.index', compact('permission_roles'));
	}

public function show(PermissionRole $permission_role)
	{		return View::make('Proutenlair.Web.PermissionRole.show', compact('permission_role'));
	}

	public function edit(PermissionRole $permission_role)
	{
;
		return View::make('Proutenlair.Web.PermissionRole.edit', compact(['permission_role']));
	}

	public function create()
	{
		return View::make('Proutenlair.Web.PermissionRole.create');
	}

}

