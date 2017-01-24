<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use Mail;
use PDF;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class WebController extends Controller
{


	public function __construct()
	{
		parent::__construct();

	}

    public function home()
    {
    	return View::make('web.home');
    }

    public function knowledge($id = null)
    {
    	return View::make('web.knowledge');
    }

    public function method()
    {
    	return View::make('web.method');
    }

    public function portfolio()
    {
    	return View::make('web.portfolio');
    }
    public function portfolio_item($creation_id)
    {

        $creation = \App\Creation::findOrFail($creation_id);

    	return View::make('web.portfolio_item', compact('creation'));
    }
    public function get_contact()
    {
        return View::make('web.contact');
    }
    public function post_contact(Request $request)
    {
    	//validation
        $rules = array(
            'name'             => 'required',
            'email'            => 'required|email',
            'subject'          => 'required',
            'message'          => 'required',

        );
         $validator = \Validator::make(\Input::all(), $rules);
         /*Nice Names*/
         //->setAttributeNames();
         if ($validator->fails()) {
                 $messages = $validator->messages();
                 return \Redirect::back() ->withErrors($validator)->withInput();
          }


        Mail::send('emails.contact', ['request'=>$request], function ($message) {
            $message->to('info@organit.fr');
        });

        \Session::flash('contact_success','message envoyé avec succès');


        return \Redirect::route('contact');////////
    }

    public function uploads($file)
    {
        //nothing to to
        //the browser redirect to the file

    }

    public function mentions_legales()
    {
        return view('mentions_legales');

    }







}
