<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class niveaux extends Model
{
    protected $table= 'niveaux';
    public $primarykey = 'id';
    protected $fillable = [
        'libelle',
        'description',

    ];

    //
}
