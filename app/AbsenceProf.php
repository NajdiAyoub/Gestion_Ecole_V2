<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AbsenceProf extends Model
{
    
    protected $table = 'absences_profs';
    public $primarykey = 'id';
    protected $fillable = [
        'date_absences',
        'seance',
        'profs_id',
        'justifie',
        'attachements_id',
        'remarque',
    ];
    //
}
