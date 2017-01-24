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
use App\Models\Proutenlair\Web\User;
use App\Http\Controllers\Controller;
use App\Models\Proutenlair\Web\Role;
use App\Models\Proutenlair\Web\Permission;

class RoleController extends Controller
{

	public function index()
	{
		$roles = Role::orderBy('updated_at', 'desc')->get();
		return View::make('Proutenlair.Web.Role.index', compact('roles'));
	}

public function show(Role $role)
	{		return View::make('Proutenlair.Web.Role.show', compact('role'));
	}

	public function edit(Role $role)
	{
		$users=User::select(\DB::raw("CONCAT(firstname, ' ', lastname) AS full_name, id"))->lists("full_name", "id");
		$permissions=Permission::lists("name", "id");
;
		return View::make('Proutenlair.Web.Role.edit', compact(['role','users','permissions']));
	}

	public function create()
	{
		$users=User::select(\DB::raw("CONCAT(firstname, ' ', lastname) AS full_name, id"))->lists("full_name", "id");
		$permissions=Permission::lists("name", "id");
		return View::make('Proutenlair.Web.Role.create', compact(['users','permissions']));
	}

}

