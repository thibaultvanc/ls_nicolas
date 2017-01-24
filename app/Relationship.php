<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Field;
use App\Table;


class Relationship extends Model
{
    protected $table = 'relationships';
    protected $guarded = [];






    public function fromField()
    {
        return $this->belongsTo(Field::class, 'from_field_id');
    }

    public function toField()
    {
        return $this->belongsTo(Field::class, 'to_field_id');
    }


    public function toModel()
    {
        return $this->belongsTo(Table::class, 'to_model');
    }


    public function onField()
    {
        return $this->belongsTo(Field::class, 'on_field_id');
    }

    public function pivotTable()
    {
        return $this->belongsTo(Table::class, 'pivot_table_id');
    }








}
