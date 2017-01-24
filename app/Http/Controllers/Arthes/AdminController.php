<?php

namespace App\Http\Controllers\Arthes;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Controllers;

use Flash;
use View;
use Redirect;
use Response;


class AdminController extends Controller
{

	public function home()
	{
		return View::make('Arthes.Admin.home');
	}
}

