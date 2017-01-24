<?php

namespace App;

use App\Table;
use App\Field;
use App\Raw;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    protected $table = 'records';
    //protected $relationships;

    // protected $fillable = ['devis_id', 'name', 'model', 'namespace', 'namespace_id'];
    protected $guarded = [];


    public function raw()
    {
        return $this->belongsTo(Raw::class);
    }


    public function field()
    {
        return $this->belongsTo(Field::class);
    }

}
