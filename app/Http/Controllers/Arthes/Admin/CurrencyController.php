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
use App\Models\Arthes\Admin\Currency;

class CurrencyController extends Controller
{

	public function index()
	{
		return View::make('Arthes.Admin.Currency.index');
	}

	public function show( $currency)
	{
		$currency='accounts currencies show';
		return View::make('Arthes.Admin.Currency.show', compact('currency'));
	}

	public function edit( $currency)
	{
		$currency='accounts currencies show';
		return View::make('Arthes.Admin.Currency.edit', compact(['currency',]));
	}

	public function create()
	{
		return View::make('Arthes.Admin.Currency.create');
	}

}

