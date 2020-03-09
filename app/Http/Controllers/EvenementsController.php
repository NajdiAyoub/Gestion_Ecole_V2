<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EvenementsController extends Controller
{
    //
    public function index()
    {
            return view('personnels.Evenements.listesevenements');
            
        }
    //
}
