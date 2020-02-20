<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnneesScolaireController extends Controller
{
    public function index()
    {
            return view('personnels.anneesscolaire');
            
        }
    //
}
