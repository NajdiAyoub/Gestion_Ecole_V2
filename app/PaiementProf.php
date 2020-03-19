<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaiementProf extends Model
{
    
    protected $table = 'profs';
    public $primarykey = 'id';
    protected $fillable = [
        'profs_id',
        'nombre_heure',
        'montant_par_heure',
        'date_paiement',
        'type_paiement',
        'salaire',
        
        
  
    ];
    //
}
