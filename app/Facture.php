<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'factures';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['number', 'esperence', 'note', 'date', 'validated_by_contact', 'client_id', 'title', 'content', 'amount_HT', 'amount_TTC', 'inputed_month', 'is_registered', 'is_fully_paid', 'gg_drive_link_devis'];


    public function projects()
    {

        return $this->belongsToMany('App\Project');
    }

    public function getProjectListAttribute($value='')
    {
        return $this->projects->lists('id');
    }
}
