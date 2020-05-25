<?php

namespace App\Http\Controllers;

use App\Salle;
use Illuminate\Http\Request;

class SallesController extends Controller
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
            $datas =Salle::where('libelle', 'like', '%'. $search . '%')->paginate(10);
            //dd($datas->toSql(),$datas->getBindings());
        } 
        else {
            $datas = Salle::paginate(10);

        }   
        return view('Administrations.salles.index')->with('datas', $datas )->with('search', $search );
        //


        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $salles = Salle::all();

        return view('Administrations.Salles.create')->with('salle',$salles);

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
            'type_salle'=> 'required',
            'nombre_place'=> 'required'

    
            ]);
      $input = $request->all();
      $data = Salle::create($input);
      return redirect(route('salles.index'))->with('success', 'Item added succesfully' );
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
            return redirect(route('salles.index'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $data = Salle::find($id);

        if (empty($data)) {
            return redirect(route('salles.index'));
        }

        return view('Administrations.Salles.edit')->with('datas', $data);
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

            'libelle'=> 'required',
            'type_salle'=> 'required',
            'nombre_place'=> 'required'

    
            ]);
        $data = Salle::find($id);

        if (empty($data)) {
            return redirect(route('salles.index'));
        }

        $data = Salle::where('id', $id)->update(request()->except(['_token', '_method']));

        return redirect(route('salles.index'))->with('success', 'Item Updated succesfully' );
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
        //dd($id);
        $data = Salle::find($id);

        if (empty($data)) {
            return redirect(route('salles.index'));
        }

        $data->delete();

        return redirect(route('salles.index'));
        //
    }
}
