<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Semestre extends Model
{
    protected $table = 'semestres';
    public $primarykey = 'id';
    protected $fillable = [
        'libelle',
    ];
    //
}
