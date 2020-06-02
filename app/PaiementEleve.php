<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaiementEleve extends Model
{
    protected $table = 'paiements_eleves';
    public $primarykey = 'id';
    protected $fillable = [
        'date_paiements',
        'type_paiements',
        'somme_paiements',
        'eleves_id',
        'parents_id',
    ];
    //
}
