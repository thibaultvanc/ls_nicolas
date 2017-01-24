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
use App\Models\Arthes\Admin\Organization;

class OrganizationController extends Controller
{

	public function index()
	{
		return View::make('Arthes.Admin.Organization.index');
	}

	public function show( $organization)
	{
		$organization='accounts currencies show';
		return View::make('Arthes.Admin.Organization.show', compact('organization'));
	}

	public function edit( $organization)
	{
		$organization='accounts currencies show';
		return View::make('Arthes.Admin.Organization.edit', compact(['organization',]));
	}

	public function create()
	{
		return View::make('Arthes.Admin.Organization.create');
	}

}

