<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Control extends Model
{
    protected $table = 'controles';
    public $primarykey = 'id';
    protected $fillable = [
        'libelle',        
        'classes_id',
        'matieres_id',
        'semestres_id',
 
    ];       //
}
