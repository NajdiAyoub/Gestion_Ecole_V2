<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $table = 'exams';
    public $primarykey = 'id';
    protected $fillable = [
        'libelle',
        'date_exam',
        'heure_exam',
        'profs_id',
        'matieres_id',
        'classes_id',
        'salles_id',
  
    ];
    //
}
