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
use App\Models\Arthes\Admin\Item;
use App\Http\Controllers\Controller;

class ItemController extends Controller
{

	public function index()
	{
		return View::make('Arthes.Admin.Item.index');
	}

	public function show( $item)
	{
		$item='accounts currencies show';
		return View::make('Arthes.Admin.Item.show', compact('item'));
	}

	public function edit( $item)
	{
		$item='accounts currencies show';
		return View::make('Arthes.Admin.Item.edit', compact(['item',]));
	}

	public function create()
	{
		return View::make('Arthes.Admin.Item.create');
	}

}

