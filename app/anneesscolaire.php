<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnneesScolaire extends Model
{
    protected $table = 'anneesscolaire';
    public $primarykey = 'id';
    protected $fillable = [
        'libelle',
    ];
}
