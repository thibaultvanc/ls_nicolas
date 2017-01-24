<?php

namespace App;

use App\_Namespace;
use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    protected $guarded = [];

    public function spaces()
    {
        return $this->hasMany(_Namespace::class);
    }
}
