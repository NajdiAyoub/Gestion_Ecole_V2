<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    protected $table = 'classes';
    public $primarykey = 'id';
    protected $fillable = [
        'libelle',
        'niveau',
  
    ];
    //
}
