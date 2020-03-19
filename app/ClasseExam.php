<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClasseExam extends Model
{
    protected $table = 'classesexams';
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
