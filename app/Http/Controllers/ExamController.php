<?php

namespace App\Http\Controllers;

use App\AnneeScolaire;
use App\Classe;
use App\Exam;
use App\Matiere;
use App\Prof;
use App\Salle;
use App\Semestre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExamController extends Controller
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
            $datas = DB::table('v_exams')->where('libelle', 'like', '%'. $search . '%')
            ->Orwhere('date_exam', 'like', '%'. $search . '%')
            ->Orwhere('heure_exam', 'like', '%'. $search . '%')
            ->Orwhere('anneesscolaire', 'like', '%'. $search . '%')
            ->Orwhere('profs', 'like', '%'. $search . '%')
            ->Orwhere('matieres', 'like', '%'. $search . '%')
            ->Orwhere('classes', 'like', '%'. $search . '%')
            ->Orwhere('salles', 'like', '%'. $search . '%')
            ->paginate(10);
            //dd($datas->toSql(),$datas->getBindings());
        } 
        else {
            $datas = DB::table('v_exams')->paginate(10);

        }   
        return view('Administrations.exams.index')->with('datas', $datas )->with('search', $search );

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $profs = Prof::all();
        $matieres = Matiere::all();
        $classes = Classe::all();
        $semestres = Semestre::all();
        $anneesscolaire = AnneeScolaire::all();
        $salles = Salle::all();



         

        return view('Administrations.Exams.create')->with('profs',$profs)->with('matieres',$matieres)->with('classes',$classes)->with('salles',$salles)->with('semestres',$semestres)->with('anneesscolaire',$anneesscolaire);

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
        $request->validate([

            'libelle'=> 'required',
            'date_exam'=> 'required',
            'heure_exam'=> 'required',
            'anneesscolaire_id'=> 'required',
            'profs_id'=> 'required',
            'matieres_id'=> 'required',
            'classes_id'=> 'required',
            'salles_id'=> 'required',

            ]);

        $input = $request->all();
        $data = Exam::create($input);
        $data->save();
        return redirect(route('exams.index'))->with('success', 'Item added succesfully' );
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
        return redirect(route('exams.index'));

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
        $data = Exam::find($id);

        if (empty($data)) {
            return redirect(route('exams.index'));
        }

        $anneesscolaire = AnneeScolaire::all();
        $profs = Prof::all();
        $classes = Classe::all();
        $matieres = Matiere::all();
        $salles = Salle::all();

        return view('Administrations.exams.edit')->with('data', $data)->with('anneesscolaire', $anneesscolaire)->with('profs', $profs)->with('classes', $classes)->with('matieres', $matieres)->with('salles', $salles);
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

            'libelle'=> 'required',
            'date_exam'=> 'required',
            'heure_exam'=> 'required',
            'anneesscolaire_id'=> 'required',
            'profs_id'=> 'required',
            'matieres_id'=> 'required',
            'classes_id'=> 'required',
            'salles_id'=> 'required',

            ]);

        $data = Exam::find($id);

        if (empty($data)) {
            return redirect(route('exams.index'));
        }

        $data = Exam::where('id', $id)->update(request()->except(['_token', '_method']));

        return redirect(route('exams.index'));
        //
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
        $data = Exam::find($id);

        if (empty($data)) {
            return redirect(route('exams.index'));
        }

        $data->delete();

        return redirect(route('exams.index'));
        //
    }
}
