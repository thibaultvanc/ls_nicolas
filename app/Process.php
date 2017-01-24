<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Process extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'processes';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'content'];

}
