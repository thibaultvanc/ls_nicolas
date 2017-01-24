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
use App\Models\Arthes\Admin\Invoice;

class InvoiceController extends Controller
{

	public function index()
	{
		return View::make('Arthes.Admin.Invoice.index');
	}

	public function show( $invoice)
	{
		$invoice='accounts currencies show';
		return View::make('Arthes.Admin.Invoice.show', compact('invoice'));
	}

	public function edit( $invoice)
	{
		$invoice='accounts currencies show';
		return View::make('Arthes.Admin.Invoice.edit', compact(['invoice',]));
	}

	public function create()
	{
		return View::make('Arthes.Admin.Invoice.create');
	}

}

