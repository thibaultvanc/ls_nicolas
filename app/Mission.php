<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mission extends Model
{
    protected $table = 'missions';
    protected $primaryKey = 'idmission';

    public function clients()
        {
            return $this->belongsToMany('App\creation');
        }

}
