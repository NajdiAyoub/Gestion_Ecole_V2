<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filiere extends Model
{
    protected $table = 'filieres';
    public $primarykey = 'id';
    protected $fillable = [
        'libelle',
        'niveau',
    //^
];
}
