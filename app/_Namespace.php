<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class _Namespace extends Model
{
    protected $guarded = [];
    protected $table = 'namespaces';

    public function tables()
    {
        return $this->hasMany('App\Table','namespace_id');
    }

    public function devis()
    {
        return $this->belongsTo('App\Devis');
    }

    public function theme()
    {
        return $this->belongsTo('App\Theme');
    }


    public function getNameAttribute($value)
    {
        // if (empty($value) || $value=='') {
        //     return 'App\Models';
        // }
        return ucfirst($value);
    }

}
