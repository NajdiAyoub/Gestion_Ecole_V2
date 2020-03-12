<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salle extends Model
{
    protected $table= 'salles';
  //  public $string = 'Libelle';
    //public $stringwe = 'Type_Salles';
    //public $stringw = 'nombres_places';
    public $primarykey = 'id';
    protected $fillable = [
      'libelle',
      'type_salle',
      'nombre_place',

  ];


    //
}
