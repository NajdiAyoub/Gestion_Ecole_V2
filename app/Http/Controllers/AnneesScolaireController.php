<?php

namespace App\Http\Controllers;

use App\anneesscolaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
      $anneesscolaire = anneesscolaire::find($id);
      dd($id);
      dd($anneesscolaire);

        return view('personnels.anneesscolaire',[

            'anneesscolaire' => $anneesscolaire
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update( $request, $id)
    {
            $anneesscolaire =DB::table('anneescolaires')->where('id', $id)->get();
            $anneesscolaire = anneesscolaire::findorfail($id);
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



