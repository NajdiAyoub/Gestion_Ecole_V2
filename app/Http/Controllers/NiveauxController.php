<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NiveauxController extends Controller
{
    public function index()
    {
            return view('Personnels.listeniveaux');
            
        }
    //
}
