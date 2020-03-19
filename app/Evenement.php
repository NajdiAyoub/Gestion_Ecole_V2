<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    protected $table = 'evenements';
    public $primarykey = 'id';
    protected $fillable = [
        'libelle',
        'type_evenement',
        'personnel_id',
        'date_evenement',
        'attachement_id',
        'description_evenement',
        
  
    ];
    //
}
