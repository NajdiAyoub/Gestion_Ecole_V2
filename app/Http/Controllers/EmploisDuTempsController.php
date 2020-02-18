<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmploisDuTempsController extends Controller
{
    //
    public function index()
    {
            return view('EmploisDuTemps.emplois');
            
        }
}
