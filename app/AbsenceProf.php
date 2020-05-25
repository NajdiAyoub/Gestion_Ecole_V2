<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AbsenceProf extends Model
{
    
    protected $table = 'absences_profs';
    public $primarykey = 'id';
    protected $fillable = [
        'date_absence',
        'seance',
        'profs_id',
        'justife',
        'attachements_id',
        'remarque',
    ];
    //
}
