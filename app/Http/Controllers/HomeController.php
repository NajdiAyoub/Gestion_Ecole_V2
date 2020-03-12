<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new Controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (auth()->user()["role"] == 1) {
            return view('Administrations.AdministrationHome');
            
        }
       
    if (auth()->user()["role"] == 2) {
        return view('layouts.eleves.elevesHome');
    }
    
if (auth()->user()["role"] == 3) {
    return view('profs.profsHome');
}
}



}
