<?php

namespace App\Http\Controllers;

use App\Classe;
use App\Eleve;
use App\Filiere;
use App\niveaux;
use App\Parente;
use Illuminate\Http\Request;

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
            $datas =Eleve::where('nom', 'like', '%'. $search . '%')->paginate(10);
            //dd($datas->toSql(),$datas->getBindings());
        } 
        else {
            $datas = Eleve::paginate(10);

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
        $data = Eleve::find($id);

        if (empty($data)) {
            return redirect(route('eleves.index'));
        }
  
        return view('Administrations.Eleves.Eleves.edit')->with('data', $data);
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
