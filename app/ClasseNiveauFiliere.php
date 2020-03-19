<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClasseNiveauFiliere extends Model
{
    protected $table = 'classesniveauxfilieres';
    public $primarykey = 'id';
    protected $fillable = [
        'classes_id',
        'profs_id',
        'niveaus_id',
        'matieres_id',
        'filieres_id',
        'semestres_id',
        'anneesscolaire_id',
                        
  
    ];
    //
}
