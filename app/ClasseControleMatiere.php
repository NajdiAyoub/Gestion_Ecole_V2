<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClasseControleMatiere extends Model
{
    protected $table = 'classescontrolesmatieres';
    public $primarykey = 'id';
    protected $fillable = [
        'classes_id',
        'profs_id',
        'niveaux_id',
        'matieres_id',
        'salles_id',
        'semestres_id',                
  
    ];
    //
}
