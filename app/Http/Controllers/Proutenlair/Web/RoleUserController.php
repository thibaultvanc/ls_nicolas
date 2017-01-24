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
use App\Http\Controllers\Controller;
use App\Models\Proutenlair\Web\RoleUser;

class RoleUserController extends Controller
{

	public function index()
	{
		$role_users = RoleUser::orderBy('updated_at', 'desc')->get();
		return View::make('Proutenlair.Web.RoleUser.index', compact('role_users'));
	}

public function show(RoleUser $role_user)
	{		return View::make('Proutenlair.Web.RoleUser.show', compact('role_user'));
	}

	public function edit(RoleUser $role_user)
	{
;
		return View::make('Proutenlair.Web.RoleUser.edit', compact(['role_user']));
	}

	public function create()
	{
		return View::make('Proutenlair.Web.RoleUser.create');
	}

}

