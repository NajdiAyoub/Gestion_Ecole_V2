<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AbsenceProf extends Model
{
    
    protected $table = 'absences_profs';
    public $primarykey = 'id';
    protected $fillable = [
        'attachements_id',
        'date_absences',
        'seance',
        'profs_id',
        'justifie',
        'remarque',
    ];
    //
}
