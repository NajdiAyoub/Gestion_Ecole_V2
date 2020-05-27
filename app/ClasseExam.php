<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClasseExam extends Model
{
    protected $table = 'classesexams';
    public $primarykey = 'id';
    protected $fillable = [
        'profs_id',
        'classes_id',
        'niveaux_id',
        'matieres_id',
        'salles_id',
        'semestres_id',                
  
    ];
    //
}
