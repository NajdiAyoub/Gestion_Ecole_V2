<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfMatiere extends Model
{
    protected $table = 'profsmatieres';
    public $primarykey = 'id';
    protected $fillable = [
        'classe_id',
        'prof_id',
        'niveau_id',
        'semestre_id',        
        'annee_scolaire',
        
  
    ];
    //
}
