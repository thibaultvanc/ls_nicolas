<?php

namespace App;

use App\Field;
use Illuminate\Database\Eloquent\Model;



class FieldType extends Model
{
    protected $guarded=[];

    public function field()
    {
        return $this->hasMany(Field::class);
    }
}
