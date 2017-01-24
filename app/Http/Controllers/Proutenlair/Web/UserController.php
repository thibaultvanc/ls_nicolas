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
use App\Models\Proutenlair\Web\User;

class UserController extends Controller
{

	public function index()
	{
		$users = User::orderBy('updated_at', 'desc')->get();
		return View::make('Proutenlair.Web.User.index', compact('users'));
	}

public function show(User $user)
	{		return View::make('Proutenlair.Web.User.show', compact('user'));
	}

	public function edit(User $user)
	{
		$roles=Role::lists("name", "id");
;
		return View::make('Proutenlair.Web.User.edit', compact(['user','roles']));
	}

	public function create()
	{
		$roles=Role::lists("name", "id");
		return View::make('Proutenlair.Web.User.create', compact(['roles']));
	}

}

