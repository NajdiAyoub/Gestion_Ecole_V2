<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClasseControleMatiere extends Model
{
    protected $table = 'classescontrolesmatieres';
    public $primarykey = 'id';
    protected $fillable = [
        'classe_id',
        'prof_id',
        'niveau_id',
        'matiere_id',
        'salle_id',
        'semestre_id',                
  
    ];
    //
}
