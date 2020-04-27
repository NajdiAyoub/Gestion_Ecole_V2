<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaiementEleve extends Model
{
    protected $table = 'paiements_eleves';
    public $primarykey = 'id';
    protected $fillable = [
        'eleves_id',
        'parents_id',
        'date_paiement',
        'type_paiement',
        'somme_paiement',
        'semestres_id',
    ];
    //
}
