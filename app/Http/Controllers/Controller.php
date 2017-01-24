<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

	protected $knowledges;

    public function __construct()
    {
    	$this->knowledges = \App\Knowledge::orderBy('ordre')->get();
    	//dd(\App\Knowledge::orderBy('ordre'));
    	view()->share('knowledges', $this->knowledges);
    }


}
