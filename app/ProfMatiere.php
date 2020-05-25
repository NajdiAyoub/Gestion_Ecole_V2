<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfMatiere extends Model
{
    protected $table = 'profsmatieres';
    public $primarykey = 'id';
    protected $fillable = [
        'classes_id',
        'profs_id',
        'niveaux_id',
        'semestres_id',        
        'matieres_id',
        
  
    ];
    //
}
