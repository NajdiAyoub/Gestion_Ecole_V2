<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AbsenceProf extends Model
{
    
    protected $table = 'absencesprofs';
    public $primarykey = 'id';
    protected $fillable = [
        'date_absence',
        'seance',
        'profs_id',
        'justife',
        'remarque',
    ];
    //
}
