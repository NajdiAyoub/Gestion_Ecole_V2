<?php

namespace App\Http\Controllers;

use App\Classe;
use App\Eleve;
use App\Filiere;
use App\niveaux;
use App\Parente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ElevesController extends Controller
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
            $datas = DB::table('v_eleves')->where('nom', 'like', '%'. $search . '%')
            ->Orwhere('prenom', 'like', '%'. $search . '%')
            ->Orwhere('date_naissance', 'like', '%'. $search . '%')
            ->Orwhere('adresse', 'like', '%'. $search . '%')
            ->Orwhere('email', 'like', '%'. $search . '%')
            ->Orwhere('niveaux', 'like', '%'. $search . '%')
            ->Orwhere('classes', 'like', '%'. $search . '%')
            ->Orwhere('filieres', 'like', '%'. $search . '%')->paginate(10);
            //dd($datas->toSql(),$datas->getBindings());
        } 
        else {
            $datas = DB::table('v_eleves')->paginate(10);

        }   
        return view('Administrations.Eleves.Eleves.index')->with('datas', $datas )->with('search', $search );

            
        }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $niveaux = niveaux::all();
        $filieres = Filiere::all();
        $classes = Classe::all();
        $parents = Parente::all();


        return view('Administrations.Eleves.Eleves.create')->with('niveaux',$niveaux)->with('Filiere',$filieres)->with('Classe',$classes)->with('Parente',$parents);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([

            'nom'=> 'required',
            'prenom'=> 'required',
            'date_naissance'=> 'required',
            'adresse'=> 'required',
            'email'=> 'required',
            'image'=> 'required',
            'niveaux_id'=> 'required',
            'filieres_id'=> 'required',
            'classes_id'=> 'required',
            'login'=> 'required',
            'password'=> 'required',




            ]);

        $input = $request->all();
        $data = Eleve::create($input);
        return redirect(route('eleves.index'))->with('success', 'Item added succesfully' );
        dd('$data');
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
        return redirect(route('eleves.index'));

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
        $niveaux = niveaux::all();
        $filieres = Filiere::all();
        $classes = Classe::all();
        $parents = Parente::all();

        $data = Eleve::find($id);

        if (empty($data)) {
            return redirect(route('eleves.index'));
        }
  
        return view('Administrations.Eleves.Eleves.edit')->with('data', $data)->with('niveaux', $niveaux)->with('filieres', $filieres)->with('classes', $classes)->with('parents', $parents);
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

        $request->validate([

            'nom'=> 'required',
            'prenom'=> 'required',
            'date_naissance'=> 'required',
            'adresse'=> 'required',
            'email'=> 'required',
            'niveaux_id'=> 'required',
            'filieres_id'=> 'required',
            'classes_id'=> 'required',
            'image'=> 'required',
            'login'=> 'required',
            'password'=> 'required',
            ]);

        $data = Eleve::find($id);

        if (empty($data)) {
            return redirect(route('eleves.index'));
        }
  
        $data = Eleve::where('id', $id)->update(request()->except(['_token', '_method']));
  
        return redirect(route('eleves.index'));

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
        $data = Eleve::find($id);

        if (empty($data)) {
            return redirect(route('eleves.index'));
        }

        $data->delete();

        return redirect(route('eleves.index'));

        //
    }
}
