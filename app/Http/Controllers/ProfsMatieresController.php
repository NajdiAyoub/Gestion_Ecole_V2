<?php

namespace App\Http\Controllers;

use App\Classe;
use App\Matiere;
use App\niveaux;
use App\Prof;
use App\ProfMatiere;
use App\Semestre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfsMatieresController extends Controller
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
            $datas = DB::table('profsmatieres')->where('libelle', 'like', '%'. $search . '%')->paginate(10);
            //dd($datas->toSql(),$datas->getBindings());
        } 
        else {
            $datas = DB::table('profsmatieres')->paginate(10);

        }   
        return view('Administrations.Affectations.ProfsMatieres.index')->with('datas', $datas )->with('search', $search );
    }

        //
    

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
        
        return view('Administrations.affectations.profsmatieres.create')->with('Classe',$classes)->with('Matiere',$matieres)->with('Semestre',$semestres)->with('profs',$profs)->with('niveaux',$niveaux);


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
        $input = $request->all();

        $data = ProfMatiere::create($input);
        $data->save();
        return redirect(route('profsmatieres.index'))->with('success', 'Item added succesfully' );
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
        return redirect(route('profsmatieres.index'));

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
        $data = ProfMatiere::find($id);

        if (empty($data)) {
            return redirect(route('profsmatieres.index'));
        }

        return view('Administrations.Affectations.ProfsMatieres.edit')->with('data', $data);
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
        $data = ProfMatiere::find($id);

        if (empty($data)) {
            return redirect(route('profsmatieres.index'));
        }

        $data = ProfMatiere::where('id', $id)->update(request()->except(['_token', '_method']));

        return redirect(route('profsmatieres.index'));

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
        $data = ProfMatiere::find($id);

        if (empty($data)) {
            return redirect(route('profsmatieres.index'));
        }

        $data->delete();

        return redirect(route('profsmatieres.index'));
        //
    }
}
