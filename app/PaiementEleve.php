<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaiementEleve extends Model
{
    protected $table = 'paiementseleves';
    public $primarykey = 'id';
    protected $fillable = [
        'eleve_id',
        'parent_id',
        'date_paiement',
        'type_paiement',
        'somme_paiement',
        'semestre',
    ];
    //
}
