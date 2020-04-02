<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    protected $table = 'v_classes';
    public $primarykey = 'id';
    protected $fillable = [
        'libelle',
        'niveaux_id',
  
    ];
    //
}
