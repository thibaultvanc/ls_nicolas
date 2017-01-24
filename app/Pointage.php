<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pointage extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pointages';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['date', 'devis_id', 'dbase', 'minutes', 'type'];

    public function devis()
    {
        return $this->belongsto(\App\Devis::class);
    }

}
