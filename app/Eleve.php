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
        'niveau',
        'filieres_id',
        'parents_id',
        'classes_id',
        'image',
        'login',
        'password',
        
  
    ];
    //
}
