<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Control extends Model
{
    protected $table = 'classesniveauxfilieres';
    public $primarykey = 'id';
    protected $fillable = [
        'classes_id',
        'matieres_id',
        'semestres_id',
 
    ];       //
}
