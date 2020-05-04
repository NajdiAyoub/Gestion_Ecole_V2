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
        'annee_scolaire',
        'prof_id',
        'matiere_id',
        'classe_id',
        'salle_id',
  
    ];
    //
}
