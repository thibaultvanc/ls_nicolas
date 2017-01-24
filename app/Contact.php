<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'contacts';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['first_name', 'last_name', 'email', 'client_id', 'phone', 'phone2', 'address', 'zip', 'city', 'country'];



    public function getProjectListAttribute()
    {
        return $this->lists('id');
    }
  
  


}
