<?php

namespace App\Providers;

use App\Permission;
use Illuminate\Support\Facades\Schema;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any application authentication / authorization services.
     *
     * @param  \Illuminate\Contracts\Auth\Access\Gate  $gate
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);


        if (Schema::hasTable('roles')) {
            foreach (Permission::with('roles')->get() as $permission) {
              // dd(\Auth::user()->hasRole('manage_larastrap'));
              Gate::define($permission->name, function ($user) use ($permission) {
                    // dd($user->can('manage_larastrap'));
                    // var_dump($permission->roles);
                    // return true;
                    // dd($permission->roles);
                    return $user->hasRole($permission->roles);
                // return true;
              });

                // $gate->define($permission->name, function($user) use ($permission){
                // });
            }
        }
    }
}
