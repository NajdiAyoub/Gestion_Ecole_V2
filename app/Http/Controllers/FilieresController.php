<?php

namespace App\Http\Controllers;

use App\Filiere;
use App\niveaux;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\DB as FacadesDB;

class FilieresController extends Controller
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
          $datas = DB::table('v_filieres')->where('libelle', 'like', '%'. $search . '%')
          ->orWhere('niveaux' , 'like', '%'. $search . '%')
          ->paginate(10);
          //dd($datas->toSql(),$datas->getBindings());
      } 
      else {
          $datas = DB::table('v_filieres')->paginate(10);

      }   
      return view('Administrations.Filieres.index')->with('datas', $datas )->with('search', $search );

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

      $niveaux = niveaux::all();
        return view('Administrations.filieres.create')->with('niveaux',$niveaux);
        //dd($niveaux);

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
        'niveaux_id'=> 'required'

        ]);
      $input = $request->all();
      //dd($input);

      $data = Filiere::create($input);
      $data->save();
      return redirect(route('filieres.index'))->with('success', 'Item added succesfully' );
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
      return redirect(route('classes.index'));

       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $data = Filiere::find($id);

      if (empty($data)) {
          return redirect(route('filieres.index'));
      }
      $niveaux = niveaux::all();
      return view('Administrations.Filieres.edit')->with('niveaux', $niveaux)->with('data', $data);
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
      $data = Filiere::find($id);

      if (empty($data)) {
          return redirect(route('filieres.index'));
      }

      $data = Filiere::where('id', $id)->update(request()->except(['_token', '_method']));

      return redirect(route('filieres.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function destroy($id)
    {
      $data = Filiere::find($id);

      if (empty($data)) {
          return redirect(route('filieres.index'));
       }

       $data->delete();

       return redirect(route('filieres.index'));
       //
   }
}