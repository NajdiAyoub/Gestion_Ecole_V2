<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BulletinsEtNotes extends Controller
{
    public function index()
    {
            return view('BulletinsEtNotes.bulletins');
            
        }
    //
}
