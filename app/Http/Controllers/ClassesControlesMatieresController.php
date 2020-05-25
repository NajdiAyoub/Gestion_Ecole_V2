<?php

namespace App\Http\Controllers;

use App\Classe;
use App\ClasseControleMatiere;
use App\Matiere;
use App\niveaux;
use App\Prof;
use App\Salle;
use App\Semestre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClassesControlesMatieresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search='';
        if(isset($request) && null !==$request->get('search')) {
            $search = $request->get('search');
            //dd($search);
            $datas = DB::table('classesexams')->where('libelle', 'like', '%'. $search . '%')->paginate(10);
            //dd($datas->toSql(),$datas->getBindings());
        } 
        else {
            $datas = DB::table('classesexams')->paginate(10);

        }   
        return view('Administrations.Affectations.ClassesControlesMatieres.index')->with('datas', $datas )->with('search', $search );
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $classes = Classe::all();
        $matieres = Matiere::all();
        $semestres = Semestre::all();
        $niveaux = niveaux::all();
        $profs = Prof::all();
        $salles= Salle::all();
        
        return view('Administrations.affectations.classescontrolesmatieres.create')->with('Classe',$classes)->with('Matiere',$matieres)->with('Semestre',$semestres)->with('profs',$profs)->with('salles',$salles)->with('niveaux',$niveaux);

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
        //
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
        //
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
        //
    }

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
