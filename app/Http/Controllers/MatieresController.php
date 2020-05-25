<?php

namespace App\Http\Controllers;

use App\Matiere;
use App\niveaux;
use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use DB;
use Illuminate\Support\Facades\DB as FacadesDB;


class MatieresController extends Controller
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
            $datas = DB::table('v_matieres')->where('libelle', 'like', '%'. $search . '%')->paginate(10);
            //dd($datas->toSql(),$datas->getBindings());
        } 
        else {
            $datas = DB::table('v_matieres')->paginate(10);

        }   
        return view('Administrations.Matieres.index')->with('datas', $datas )->with('search', $search );

    }
  
    


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $niveaux = niveaux::all();
        return view('Administrations.Matieres.create')->with('niveaux',$niveaux);

        
    }



    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        //$request->validate([

          //  'libelle'=> 'required',
            //'niveaux'=> 'required'


            //]);
        $input = $request->all();

        //dd($input);

        $data = Matiere::create($input);
        $data->save();
     
        return redirect(route('matieres.index'))->with('success', 'Item added succesfully' );

                dd($input);

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //  dd($id);

        return redirect(route('matieres.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Matiere::find($id);

        if (empty($data)) {
            return redirect(route('matieres.index'));
        }

        return view('Administrations.Matieres.edit')->with('data', $data);
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
            'niveaux'=> 'required'



            ]);
        $data = Matiere::find($id);

        if (empty($data)) {
            return redirect(route('matieres.index'));
        }

        $data = Matiere::where('id', $id)->update(request()->except(['_token', '_method']));

        return redirect(route('matieres.index'))->with('success', 'Item Updated succesfully' );

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
        $data = Matiere::find($id);

        if (empty($data)) {
            return redirect(route('matieres.index'));
        }

        $data->delete();

        return redirect(route('matieres.index'));

    }
}