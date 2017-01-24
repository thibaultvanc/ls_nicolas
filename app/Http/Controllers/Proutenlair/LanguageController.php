<?php 
namespace App\Http\Controllers\Proutenlair;

      use App\Http\Requests;
      use App\Http\Controllers\Controller;
      // use Auth;
      use Session;

      // use Redirect;
      use Illuminate\Http\Request;

      class LanguageController extends Controller {

      public function choose()
        {
          Session::set('locale', request()->get('lang'));
          return redirect()->back();
        }

      }

      