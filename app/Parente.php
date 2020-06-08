<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parente extends Model
{
    protected $table = 'parents';
    public $primarykey = 'id';
    protected $fillable = [
        'nom',
        'prenom',
        'cin',
        'adresse',        
        'sexe',
        'eleves_id',
        'tel',
        'email',
        

    ];
    //
}
