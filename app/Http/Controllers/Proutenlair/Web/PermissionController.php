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

class PermissionController extends Controller
{

	public function index()
	{
		$permissions = Permission::orderBy('updated_at', 'desc')->get();
		return View::make('Proutenlair.Web.Permission.index', compact('permissions'));
	}

public function show(Permission $permission)
	{		return View::make('Proutenlair.Web.Permission.show', compact('permission'));
	}

	public function edit(Permission $permission)
	{
		$roles=Role::lists("name", "id");
;
		return View::make('Proutenlair.Web.Permission.edit', compact(['permission','roles']));
	}

	public function create()
	{
		$roles=Role::lists("name", "id");
		return View::make('Proutenlair.Web.Permission.create', compact(['roles']));
	}

}

