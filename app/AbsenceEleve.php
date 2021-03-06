<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AbsenceEleve extends Model
{
    protected $table = 'absences_eleves';
    public $primarykey = 'id';
    protected $fillable = [
        'eleves_id',
        'date_absence',
        'seance',
        'attachements_id',
        'justife',
        'remarque',
    ];

    //
}
