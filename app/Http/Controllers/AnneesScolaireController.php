<?php

namespace App\Http\Controllers;

use App\anneesscolaire;
use Illuminate\Http\Request;

class AnneesScolaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anneesscolaire = anneesscolaire::all()->toArray();

        return view('personnels.anneesscolaire',compact('anneesscolaire'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    // dd($request->all());
        $this->validate($request,[
            'libelle' => 'required'
        ]);
        $anneesscolaire = new anneesscolaire();
      
        $anneesscolaire->libelle = $request->input('libelle');
      
        $anneesscolaire->save();
        return redirect('anneesscolaire')->with('success', 'Data Saved');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('personnels.anneesscolaire',[

            'anneesscolaire' => anneesscolaire::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
            $anneesscolaire = anneesscolaire::find($id);
            $anneesscolaire->libelle = $request->input('libelle');
            $anneesscolaire->save();

        return  redirect('anneesscolaire')->with('success', 'Annees edite');
    }

        //
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}



