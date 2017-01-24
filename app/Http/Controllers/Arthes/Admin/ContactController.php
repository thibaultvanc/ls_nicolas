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
use App\Models\Arthes\Admin\Contact;

class ContactController extends Controller
{

	public function index()
	{
		return View::make('Arthes.Admin.Contact.index');
	}

	public function show( $contact)
	{
		$contact='accounts currencies show';
		return View::make('Arthes.Admin.Contact.show', compact('contact'));
	}

	public function edit( $contact)
	{
		$contact='accounts currencies show';
		return View::make('Arthes.Admin.Contact.edit', compact(['contact',]));
	}

	public function create()
	{
		return View::make('Arthes.Admin.Contact.create');
	}

}

