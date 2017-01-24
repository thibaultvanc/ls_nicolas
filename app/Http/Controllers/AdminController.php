<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard');
    }


    public function devis_select()
    {
        return view('admin.devis.devis_select');
    }


    public function dev_cheatsheet_home()
    {
        return view('admin.cheatsheet.home');
    }

    // public function dev_cheatsheet_laravel()
    // {
    //     return view('admin.cheatsheet.dev_cheatsheet_laravel');
    // }
    //


    public function dev_cheatsheet_laravel()
    {
        return view('admin.cheatsheet.dev_cheatsheet_laravel');
    }

    public function dev_cheatsheet_git()
    {
        return view('admin.cheatsheet.dev_cheatsheet_git');
    }

    public function dev_cheatsheet_javascript()
    {
        return view('admin.cheatsheet.dev_cheatsheet_javascript');
    }

    public function dev_cheatsheet_HTML_CSS()
    {
        return view('admin.cheatsheet.dev_cheatsheet_HTML_CSS');
    }

    public function dev_cheatsheet_Vue()
    {
        return view('admin.cheatsheet.dev_cheatsheet_Vue');
    }

    public function dev_cheatsheet_bootstrapping()
    {
        return view('admin.cheatsheet.dev_cheatsheet_bootstrapping');
    }





        public function programing_tools_home()
        {
            return view('admin.programing_tools.home');
        }



        public function tools_boostrapping()
        {
            return view('admin.programing_tools.boostrapping');
        }



        public function tools_json2vuejs()
        {
            return view('admin.programing_tools.json2vuejs');
        }


        public function post_tools_json2vuejs(Request $request)
        {

            $script = (new \Organit\Tools\JsontoVueJs($request))->handle();



            // return view('admin.programing_tools.json2vuejs', compact(''));

        }









    public function documentation_bootstrapping()
    {
        return view('admin.cheatsheet.documentation_bootstrapping.home');
    }


}
