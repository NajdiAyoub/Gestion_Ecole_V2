<?php

namespace App\Http\Controllers;

use App\Classe;
use App\Evenement;
use App\Prof;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EvenementsController extends Controller
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
            $datas = DB::table('v_evenements')->where('libelle', 'like', '%'. $search . '%')->Orwhere('date_evenements', 'like', '%'. $search . '%')->Orwhere('classes', 'like', '%'. $search . '%')->Orwhere('profs', 'like', '%'. $search . '%')->Orwhere('details', 'like', '%'. $search . '%')
            ->paginate(10);

        } 
        else {
            $datas = DB::table('v_evenements')->paginate(10);

        }   
        return view('Administrations.evenements.index')->with('datas', $datas )->with('search', $search );

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classes = Classe::all();
        $profs = Prof::all();
        return view('Administrations.evenements.create')->with('classes', $classes)->with('profs', $profs) ;

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
       // $request->validate([

         //   'libelle'=> 'required',
           // 'date_exam'=> 'required',
           // 'heure_exam'=> 'required',
           // 'anneesscolaire_id'=> 'required',
           // 'profs_id'=> 'required',
           // 'matieres_id'=> 'required',
           // 'classes_id'=> 'required',
            //'salles_id'=> 'required',

            //]);

        $input = $request->all();
        $data = Evenement::create($input);
        $data->save();
        return redirect(route('evenements.index'))->with('success', 'Item added succesfully' );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect(route('evenements.index'));

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
         $data = Evenement::find($id);

         if (empty($data)) {
             return redirect(route('evenements.index'));
         }
 
         $profs = Prof::all();
         $classes = Classe::all();
      
 
         return view('Administrations.evenements.edit')->with('data', $data)->with('profs', $profs)->with('classes', $classes);
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
       // $request->validate([

         //   'libelle'=> 'required',
           // 'date_exam'=> 'required',
           // 'heure_exam'=> 'required',
           // 'anneesscolaire_id'=> 'required',
           // 'profs_id'=> 'required',
            //'matieres_id'=> 'required',
            //'classes_id'=> 'required',
            //'salles_id'=> 'required',

            //]);

        $data = Evenement::find($id);

        if (empty($data)) {
            return redirect(route('evenements.index'));
        }

        $data = Evenement::where('id', $id)->update(request()->except(['_token', '_method']));

        return redirect(route('evenements.index'));
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
        $data = Evenement::find($id);

        if (empty($data)) {
            return redirect(route('evenements.index'));
        }

        $data->delete();

        return redirect(route('evenements.index'));
        //
    }
}
