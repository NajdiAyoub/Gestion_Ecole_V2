<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attachement extends Model
{
    protected $table = 'attachements';
    public $primarykey = 'id';
    protected $fillable = [
        'filename', 
        'type',
        'date_attach',
        
 
    ];       //

    //
}
