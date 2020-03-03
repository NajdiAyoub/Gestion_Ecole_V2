<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class niveaux extends Model
{
    protected $table= 'niveaux';
    public $string = 'libelle';
    public $stringw = 'description';
    public $primarykey = 'id';

    //
}
