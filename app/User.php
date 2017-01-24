<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    protected $table = 'users';


    protected $fillable = ['first_name', 'last_name', 'client_id', 'is_commercial', 'comm_1', 'comm_2', 'phone', 'phone2', 'address', 'zip', 'city', 'country', 'email', 'password', 'remember_token', 'is_admin'];

    protected $hidden = [
        'password', 'remember_token',
    ];




    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }


    public function assignRole($role)
    {
       //dd($role);
        $this->roles()->attach(
            Role::whereName($role)->firstOrFail()
        );
    }

    public function removeRole($role)
    {

        $this->roles()->detach(
            Role::whereName($role)->firstOrFail()
        );
    }


    public function hasRole($role)
    {
        if (is_string($role)) {
          // dd($role);
            return $this->roles->contains('name', $role);
        }


        return !! $role->intersect($this->roles)->count();
    }









    public function client()
    {
        return $this->BelongsTo('App\Client');
    }





    public function getProjectListAttribute() /// ?????
    {
        return $this->lists('id');
    }


}
