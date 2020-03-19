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
        'administrations_id',
        'date_evenement',
        'attachements_id',
        'description_evenement',
        
  
    ];
    //
}
