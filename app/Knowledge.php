<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Knowledge extends Model
{
    protected $table='Knowledges';
    protected $fillables=['title','titleSf','img_catSf','ordre','accroche','img_sscat','rightLeft','paragraphe1','paragraphe2','paragraphe3','img_descr1','img_descr2','img_descr3', 'img_descr4'];


}
