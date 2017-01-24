<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'clients';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['first_name', 'last_name', 'email', 'phone', 'phone2', 'address', 'responsable', 'firm_name', 'firm_statut', 'type'];
    //protected $fillable = ['firm_name', 'firm_statut', 'type', 'email', 'phone', 'phone2', 'address','adress2','zip', 'city', 'country','responsable_user_id'];


    public function devis()
    {
        return $this->hasMany('App\Devis');
    }


    public function getClientListAttribute($value='')
    {
        return $this->lists('id');
    }

    public function scopePro($query)
    {
        return $query->where('type', '=', 'pro');
    }

    public function scopeParticulier($query)
    {
        return $query->where('type', '=', 'particulier');
    }

    public function users()
    {
        return $this->hasMany('App\User');
    }


}
