<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfsController extends Controller
{
    public function index()
    {
            return view('personnels.listesProfs');
            
        }
    //
}
