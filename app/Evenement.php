<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    protected $table = 'evenements';
    public $primarykey = 'id';
    protected $fillable = [
        'libelle',
        'date_evenements',
        'profs_id',
        'classes_id',
        'details',
        
  
    ];
    //
}
