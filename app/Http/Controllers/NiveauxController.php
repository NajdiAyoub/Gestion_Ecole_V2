<?php

namespace App\Http\Controllers;

use App\niveaux;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NiveauxController extends Controller
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
            $datas =niveaux::where('libelle', 'like', '%'. $search . '%')->paginate(10);
            //dd($datas->toSql(),$datas->getBindings());
        } 
        else {
            $datas = niveaux::paginate(10);

        }   
        return view('Administrations.niveaux.index')->with('datas', $datas )->with('search', $search );
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Administrations.Niveaux.create');
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
      //  dd('ok');

      $input = $request->all();
      $data = niveaux::create($input);
      return redirect(route('niveaux.index'))->with('success', 'Item added succesfully' );
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
        $data = niveaux::find($id);

        if (empty($data)) {
            return redirect(route('niveaux.index'));
        }

        return view('Administrations.Niveaux.edit')->with('datas', $data);
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
        $data = niveaux::find($id);

        if (empty($data)) {
            return redirect(route('niveaux.index'));
        }

        $data = niveaux::where('id', $id)->update(request()->except(['_token', '_method']));

        return redirect(route('niveaux.index'))->with('success', 'Item Updated succesfully' );

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
        $data = niveaux::find($id);

        if (empty($data)) {
            return redirect(route('niveaux.index'));
        }

        $data->delete();

        return redirect(route('niveaux.index'));

        //
    }
}
