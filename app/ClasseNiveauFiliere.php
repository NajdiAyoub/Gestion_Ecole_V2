<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClasseNiveauFiliere extends Model
{
    protected $table = 'classesniveaufiliere';
    public $primarykey = 'id';
    protected $fillable = [
        'classe_id',
        'prof_id',
        'niveau_id',
        'matiere_id',
        'filiere_id',
        'semestre_id',
        'annee_scolaire',
                        
  
    ];
    //
}
