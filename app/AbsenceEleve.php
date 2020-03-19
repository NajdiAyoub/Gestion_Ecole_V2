<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AbsenceEleve extends Model
{
    protected $table = 'absenceseleves';
    public $primarykey = 'id';
    protected $fillable = [
        'eleve_id',
        'date_absence',
        'seance',
        'attachement_id',
        'justife',
        'remarque',
    ];

    //
}
