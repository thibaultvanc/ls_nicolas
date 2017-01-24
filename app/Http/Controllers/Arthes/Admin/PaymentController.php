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
use App\Models\Arthes\Admin\Payment;

class PaymentController extends Controller
{

	public function index()
	{
		return View::make('Arthes.Admin.Payment.index');
	}

	public function show( $payment)
	{
		$payment='accounts currencies show';
		return View::make('Arthes.Admin.Payment.show', compact('payment'));
	}

	public function edit( $payment)
	{
		$payment='accounts currencies show';
		return View::make('Arthes.Admin.Payment.edit', compact(['payment',]));
	}

	public function create()
	{
		return View::make('Arthes.Admin.Payment.create');
	}

}

