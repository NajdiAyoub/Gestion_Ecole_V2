<?php

namespace App\Http\Controllers;

use App\Classe;
use App\ClasseExam;
use App\EmploiDuTempEleve;
use App\Matiere;
use App\niveaux;
use App\Prof;
use App\Salle;
use App\Semestre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClassesExamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $search='';
        if(isset($request) && null !==$request->get('search')) {
            $search = $request->get('search');
            //dd($search);
            $datas = DB::table('v_classesexams')->where('profs', 'like', '%'. $search . '%')
            ->Orwhere('matieres', 'like', '%'. $search . '%')
            ->Orwhere('classes', 'like', '%'. $search . '%')
            ->Orwhere('niveaux', 'like', '%'. $search . '%')
            ->Orwhere('salles', 'like', '%'. $search . '%')
            ->Orwhere('semestres', 'like', '%'. $search . '%')



            ->paginate(10);
            //dd($datas->toSql(),$datas->getBindings());
        } 
        else {
            $datas = DB::table('v_classesexams')->paginate(10);

        }   
        return view('Administrations.Affectations.ClassesExams.index')->with('datas', $datas )->with('search', $search );

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
        
        return view('Administrations.affectations.classesexams.create')->with('Classe',$classes)->with('Matiere',$matieres)->with('Semestre',$semestres)->with('profs',$profs)->with('salles',$salles)->with('niveaux',$niveaux);


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

            'semestres_id'=> 'required',
            'niveaux_id'=> 'required',
            'profs_id'=> 'required',
            'matieres_id'=> 'required',
            'classes_id'=> 'required',
            'salles_id'=> 'required',
            'semestres_id'=> 'required',

            ]);
        $input = $request->all();
        $data = ClasseExam::create($input);
        return redirect(route('classesexams.index'));
        //
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
        return redirect(route('classesexams.index'));

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
        $data = ClasseExam::find($id);

        if (empty($data)) {
            return redirect(route('classesexams.index'));
        }

        $classes = Classe::all();
        $matieres = Matiere::all();
        $semestres = Semestre::all();
        $niveaux = niveaux::all();
        $profs = Prof::all();
        $salles= Salle::all();
        return view('Administrations.Affectations.ClassesExams.edit')->with('data', $data)->with('profs', $profs)->with('matieres', $matieres)->with('classes', $classes)->with('niveaux', $niveaux)->with('semestres', $semestres);
        //
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
        $request->validate([

            'semestres_id'=> 'required',
            'niveaux_id'=> 'required',
            'profs_id'=> 'required',
            'matieres_id'=> 'required',
            'classes_id'=> 'required',
            'salles_id'=> 'required',
            'semestres_id'=> 'required',

            ]);
        $data = ClasseExam::find($id);

        if (empty($data)) {
            return redirect(route('classesexams.index'));
        }

        $data = ClasseExam::where('id', $id)->update(request()->except(['_token', '_method']));

        return redirect(route('classesexams.index'));

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
        
        $data = ClasseExam::find($id);

        if (empty($data)) {
            return redirect(route('classesexams.index'));
        }

        $data->delete();

        return redirect(route('classesexams.index'));
        //
    }
}
