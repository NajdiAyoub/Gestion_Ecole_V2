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
        'addresses',
        'email',
        'niveau',
        'filiere',
        'classe',
        'image',
        'login',
        'password',
        
  
    ];
    //
}
