<?php

namespace App\Http\Controllers;

use App\Semestre;
use App\AnneesScolaire;
use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\DB;

class SemestresController extends Controller
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
            $datas =Semestre::where('libelle', 'like', '%'. $search . '%')->paginate(10);
            //dd($datas->toSql(),$datas->getBindings());
        } 
        else {
            $datas = Semestre::paginate(10);

        }   
        return view('Administrations.Semestres.index')->with('datas', $datas )->with('search', $search );
        

    }
  
    


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Administrations.Semestres.create');

        
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
        $data = Semestre::create($input);
        return redirect(route('semestres.index'))->with('success', 'Item added succesfully' );
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

        return redirect(route('semestres.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Semestre::find($id);

        if (empty($data)) {
            return redirect(route('semestres.index'));
        }

        return view('Administrations.Semestres.edit')->with('data', $data);
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
        $data = Semestre::find($id);

        if (empty($data)) {
            return redirect(route('semestres.index'));
        }

        $data = Semestre::where('id', $id)->update(request()->except(['_token', '_method']));

        return redirect(route('semestres.index'))->with('success', 'Item Updated succesfully' );

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
        $data = Semestre::find($id);

        if (empty($data)) {
            return redirect(route('semestres.index'));
        }

        $data->delete();

        return redirect(route('semestres.index'));

    }
}