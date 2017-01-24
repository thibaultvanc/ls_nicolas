<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'projects';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'dbase_code', 'description', 'start_date', 'end_date', 'amount', 'notes', 'action'];



    public function factures()
    {
        return $this->belongsToMany('App\Facture', 'facture_project');
    }

    

}
