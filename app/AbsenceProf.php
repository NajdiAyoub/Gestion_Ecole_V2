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
        'attachements_id',
        'justifie',
        'remarque',
    ];
    //
}
