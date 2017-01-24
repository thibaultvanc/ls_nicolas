<?php
namespace App\Http\Controllers\Picaflor\Admin;

use View;
use Flash;
use Redirect;
use Response;
use App\User;
use Carbon\Carbon;
use App\Http\Requests;
use App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Picaflor\Admin\Role;
use App\Models\Picaflor\Admin\Plan;
use App\Models\Picaflor\Admin\Site;
use App\Models\Picaflor\Admin\Firm;
use App\Http\Controllers\Controller;
use App\Models\Picaflor\Admin\Country;
use App\Models\Picaflor\Admin\Product;
use App\Models\Picaflor\Admin\FirmType;
use App\Models\Picaflor\Admin\Currency;
use App\Models\Picaflor\Admin\PlanType;
use App\Models\Picaflor\Admin\Invoices;
use App\Models\Picaflor\Admin\PlanFamily;
use App\Models\Picaflor\Admin\Permission;
use App\Models\Picaflor\Admin\PlanPeriod;
use App\Models\Picaflor\Admin\Transaction;
use App\Models\Picaflor\Admin\ProductType;
use App\Models\Picaflor\Admin\Organization;
use App\Models\Picaflor\Admin\PaymentProvider;

class TransactionController extends Controller
{

	public function index()
	{
		$transactions = Transaction::orderBy('updated_at', 'desc')->get();
		return View::make('Picaflor.Admin.Transaction.index', compact('transactions'));
	}

public function show(Transaction $transaction)
	{
		$transaction->load(['invoices', 'payment_provider']);
		return View::make('Picaflor.Admin.Transaction.show', compact('transaction'));
	}

	public function edit(Transaction $transaction)
	{
		return View::make('Picaflor.Admin.Transaction.edit');
	}
	public function create()
	{
		$invoices=Invoices::lists("name", "id");
		$payment_providers=PaymentProvider::lists("name", "id");
		return View::make('Picaflor.Admin.Transaction.create', compact(['invoices','payment_providers']));
	}

}

