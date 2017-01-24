<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DevisDocument extends Model
{
    protected $table = 'devis_docuemnts';

    protected $fillable = ['name', 'extension', 'devis_id'];



    public function devis()
    {
        return $this->belongsTo('App\DevisDocument');
    }

}
