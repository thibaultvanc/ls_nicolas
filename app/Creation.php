<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Creation extends Model
{
    protected $table ='creations';

   protected $primaryKey = 'idcreation';

    public function missions()
        {
            return $this->belongsToMany('App\Mission', 'creation_mission');
        }
}
