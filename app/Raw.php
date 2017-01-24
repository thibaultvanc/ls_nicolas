<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Record;
use App\Table;

class Raw extends Model
{
    protected $table = 'raws';
    //protected $relationships;

    // protected $fillable = ['devis_id', 'name', 'model', 'namespace', 'namespace_id'];
    protected $guarded = [];


    public function records()
    {
        return $this->hasMany(Record::class);
    }

    public function table()
    {
        return $this->belongsTo(Table::class);
    }



}
