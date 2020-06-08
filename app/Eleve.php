<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eleve extends Model
{
    
    protected $table = 'eleves';
    public $primarykey = 'id';
    protected $fillable = [
        'nom',
        'prenom',
        'date_naissance',
        'addreses',
        'email',
        'niveaux_id',
        'filieres_id',
        'classes_id',
        'image',
        'login',
        'password',
        
  
    ];
    //
}
