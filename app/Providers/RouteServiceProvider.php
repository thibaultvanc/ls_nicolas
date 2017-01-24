<?php

namespace App\Providers;

use Illuminate\Routing\Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to the controller routes in your routes file.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function boot(Router $router)
    {
        //

        parent::boot($router);
    }




























    /**
     * Define the routes for the application.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function map(Router $router)
    {
        $router->group(['namespace' => $this->namespace], function ($router) {
            require app_path('Http/routes.php');
            require app_path('Http/tests.php');
            /*
            **  Middle
            */
            // dd('__HERE__');

            // dd('variable',\File::files(app_path().'/Http') );
            $filesInHttp = \File::files(app_path().'/Http');


            // $test = \File::exists(__DIR__ .'/../Http/Kernel.php');
            // dd('__DIR__',  $test);

            if (\Schema::hasTable('devis')) {

                foreach ($filesInHttp as $path) {
                    $file =  last(explode('/',$path));

                    foreach (\App\Devis::all() as $devis) {

                        if ($devis->app_name && \File::exists(__DIR__ .'/../Http/'.$devis->app_name.'_routes.php' ) && \File::exists(__DIR__ .'/../Http/'.$devis->app_name.'_api.php' )) {


                          
                            \Route::group([
                                'middleware' => 'api',
                                // 'namespace' => $this->namespace,
                                'prefix' => 'api',
                            ], function ($router) use ($devis) {
                                  require app_path('Http/'.$devis->app_name.'_api.php');
                                // require base_path('routes/api.php');
                            });

                            require app_path('Http/'.$devis->app_name.'_routes.php');


                        }

                    }


                }

            }



            //
            //
            //
            //
            // require app_path('Http/Middle_routes.php');
            // require app_path('Http/Middle_api.php');
            //
            //
            // /*
            // **  ARTHES
            // */
            //
            // require app_path('Http/Arthes_routes.php');
            // require app_path('Http/Arthes_api.php');
            //

            /*
            **  Picaflor
            */
            //
            // require app_path('Http/Picaflor_routes.php');
            // require app_path('Http/Picaflor_api.php');
            //
            //
            // /*
            // **  lARASTRAP
            // */
            // require app_path('Http/Larastrap_routes.php');
            // require app_path('Http/Larastrap_api.php');
            // //require app_path('Http/api.php');
        });
    }
}
