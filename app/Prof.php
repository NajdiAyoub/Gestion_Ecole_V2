<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prof extends Model
{
    
    protected $table = 'profs';
    public $primarykey = 'id';
    protected $fillable = [
        'nom',
        'prenom',
        'cin',
        'tel',
        'email',
        'rib',
        'type_contrat',
        'adresse',
        'salaire',
        'montant_par_heure',
        'login',
        'password',
        
  
    ];

    //
}
