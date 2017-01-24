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
use App\Models\Picaflor\Admin\Site;
use App\Models\Picaflor\Admin\Plan;
use App\Http\Controllers\Controller;
use App\Models\Picaflor\Admin\Product;
use App\Models\Picaflor\Admin\Currency;
use App\Models\Picaflor\Admin\RoleUser;
use App\Models\Picaflor\Admin\Organization;

class RoleUserController extends Controller
{

	public function index()
	{
		$role_users = RoleUser::orderBy('updated_at', 'desc')->get();
		return View::make('Picaflor.Admin.RoleUser.index', compact('role_users'));
	}

public function show(RoleUser $role_user)
	{		return View::make('Picaflor.Admin.RoleUser.show', compact('role_user'));
	}

	public function edit(RoleUser $role_user)
	{
		return View::make('Picaflor.Admin.RoleUser.edit');
	}
	public function create()
	{
		return View::make('Picaflor.Admin.RoleUser.create');
	}

}

