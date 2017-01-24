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
use App\Models\Arthes\Admin\Person;
use App\Http\Controllers\Controller;

class PersonController extends Controller
{

	public function index()
	{
		return View::make('Arthes.Admin.Person.index');
	}

	public function show( $person)
	{
		$person='accounts currencies show';
		return View::make('Arthes.Admin.Person.show', compact('person'));
	}

	public function edit( $person)
	{
		$person='accounts currencies show';
		return View::make('Arthes.Admin.Person.edit', compact(['person',]));
	}

	public function create()
	{
		return View::make('Arthes.Admin.Person.create');
	}

}

