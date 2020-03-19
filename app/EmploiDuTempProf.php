<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmploiDuTempProf extends Model
{
    
    protected $table = 'emploisdutempsprofs';
    public $primarykey = 'id';
    protected $fillable = [
        'classe_id',
        'prof_id',
        'annee_scolaire',
        
  
    ];
    //
}
