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
use App\Models\Picaflor\Admin\Firm;
use App\Models\Picaflor\Admin\Site;
use App\Models\Picaflor\Admin\Plan;
use App\Models\Picaflor\Admin\Role;
use App\Http\Controllers\Controller;
use App\Models\Picaflor\Admin\Country;
use App\Models\Picaflor\Admin\Product;
use App\Models\Picaflor\Admin\Invoices;
use App\Models\Picaflor\Admin\PlanType;
use App\Models\Picaflor\Admin\Currency;
use App\Models\Picaflor\Admin\FirmType;
use App\Models\Picaflor\Admin\PlanFamily;
use App\Models\Picaflor\Admin\PlanPeriod;
use App\Models\Picaflor\Admin\Permission;
use App\Models\Picaflor\Admin\ProductType;
use App\Models\Picaflor\Admin\Subscription;
use App\Models\Picaflor\Admin\Organization;
use App\Models\Picaflor\Admin\PaymentProvider;

class SubscriptionController extends Controller
{

	public function index()
	{
		$subscriptions = Subscription::orderBy('updated_at', 'desc')->get();
		return View::make('Picaflor.Admin.Subscription.index', compact('subscriptions'));
	}

public function show(Subscription $subscription)
	{
		$subscription->load(['user', 'plan']);
		return View::make('Picaflor.Admin.Subscription.show', compact('subscription'));
	}

	public function edit(Subscription $subscription)
	{
		return View::make('Picaflor.Admin.Subscription.edit');
	}
	public function create()
	{
		$users=User::select(\DB::raw("CONCAT(firstname, ' ', lastname) AS full_name, id"))->lists("full_name", "id");
		$plans=Plan::lists("name", "id");
		return View::make('Picaflor.Admin.Subscription.create', compact(['users','plans']));
	}

}

