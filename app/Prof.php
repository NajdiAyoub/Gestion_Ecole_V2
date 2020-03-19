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
        'date_naissance',
        'tel',
        'email',
        'rib',
        'type_contrat',
        'salaire',
        'montant_par_heure',
        'login',
        'password',
        
  
    ];

    //
}
