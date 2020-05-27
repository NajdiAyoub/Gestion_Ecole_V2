<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfMatiere extends Model
{
    protected $table = 'profsmatieres';
    public $primarykey = 'id';
    protected $fillable = [
        'profs_id',
        'classes_id',
        'niveaux_id',
        'semestres_id',        
        'matieres_id',
        
  
    ];
    //
}
