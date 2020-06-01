<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaiementProf extends Model
{
    
    protected $table = 'paiements_profs';
    public $primarykey = 'id';
    protected $fillable = [
        'nombre_heure',
        'montant_par_heure',
        'profs_id',        
        'date_paiements',
        'type_paiements',
        'salaire',
        'somme',

        
        
  
    ];
    //
}
