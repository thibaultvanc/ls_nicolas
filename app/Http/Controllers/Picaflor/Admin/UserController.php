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
use App\Models\Picaflor\Admin\Plan;
use App\Models\Picaflor\Admin\Firm;
use App\Models\Picaflor\Admin\Role;
use App\Models\Picaflor\Admin\Site;
use App\Http\Controllers\Controller;
use App\Models\Picaflor\Admin\Product;
use App\Models\Picaflor\Admin\Currency;
use App\Models\Picaflor\Admin\Organization;

class UserController extends Controller
{

	public function index()
	{
		$users = User::orderBy('updated_at', 'desc')->get();
		return View::make('Picaflor.Admin.User.index', compact('users'));
	}

public function show(User $user)
	{		return View::make('Picaflor.Admin.User.show', compact('user'));
	}

	public function edit(User $user)
	{
		return View::make('Picaflor.Admin.User.edit');
	}
	public function create()
	{
		$roles=Role::lists("name", "id");
		$firms=Firm::lists("name", "id");
		$organizations=Organization::lists("name", "id");
		return View::make('Picaflor.Admin.User.create', compact(['roles','firms','organizations']));
	}

}

