<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClasseNiveauFiliere extends Model
{
    protected $table = 'classesniveauxfilieres';
    public $primarykey = 'id';
    protected $fillable = [
        'niveaux_id',
        'classes_id',
        'profs_id',
        'matieres_id',
        'filieres_id',
        'semestres_id',
        'anneesscolaire_id',
                        
  
    ];
    //
}
