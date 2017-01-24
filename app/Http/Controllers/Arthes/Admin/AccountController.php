<?php
namespace App\Http\Controllers\Arthes\Admin;

use View;
use Flash;
use Redirect;
use Response;
use Carbon\Carbon;
use App\Http\Requests;
use App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Arthes\Admin\Account;

class AccountController extends Controller
{

	public function index()
	{
		return View::make('Arthes.Admin.Account.index');
	}

	public function show( $account)
	{
		$account='accounts currencies show';
		return View::make('Arthes.Admin.Account.show', compact('account'));
	}

	public function edit( $account)
	{
		$account='accounts currencies show';
		return View::make('Arthes.Admin.Account.edit', compact(['account',]));
	}

	public function create()
	{
		return View::make('Arthes.Admin.Account.create');
	}

}

