<?php

namespace App\Http\Controllers;

use App\Classe;
use App\Control;
use App\Matiere;
use App\Semestre;
use Illuminate\Http\Request;
use DB;

class ControlesController extends Controller
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
            $datas = DB::table('v_controles')->where('libelle', 'like', '%'. $search . '%')->paginate(10);
            //dd($datas->toSql(),$datas->getBindings());
        } 
        else {
            $datas = DB::table('v_controles')->paginate(10);

        }   
        return view('Administrations.controles.index')->with('datas', $datas )->with('search', $search );
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
        
        return view('Administrations.controles.create')->with('Classe',$classes)->with('Matiere',$matieres)->with('Semestre',$semestres);

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
        //dd($input);

        $data = Control::create($input);
        $data->save();
        return redirect(route('controles.index'))->with('success', 'Item added succesfully' );
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
        return redirect(route('controles.index'));

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
        
        $data = Control::find($id);

        if (empty($data)) {
            return redirect(route('controles.index'));
        }

        return view('Administrations.controles.edit')->with('data', $data);
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
        $data = Control::find($id);

        if (empty($data)) {
            return redirect(route('controles.index'));
        }

        $data = Control::where('id', $id)->update(request()->except(['_token', '_method']));

        return redirect(route('controles.index'));
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
        $data = Control::find($id);

        if (empty($data)) {
            return redirect(route('controles.index'));
        }

        $data->delete();

        return redirect(route('controles.index'));
        //
    }
}
