<?php

namespace App\Http\Controllers;

use App\ProfMatiere;
use Illuminate\Http\Request;

class ProfsMatieresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
       $datas = ProfMatiere::all();
        return view('Administrations.Affectations.ProfsMatieres.index');//->with('datas', $datas);

        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Administrations.Affectations.ProfsMatieres.create');

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
        $data = ProfMatiere::create($input);
        return redirect(route('profsmatieres.index'));
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
        return redirect(route('profsmatieres.index'));

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
        $data = ProfMatiere::find($id);

        if (empty($data)) {
            return redirect(route('profsmatieres.index'));
        }

        return view('Administrations.Affectations.ProfsMatieres.edit')->with('data', $data);
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
        $data = ProfMatiere::find($id);

        if (empty($data)) {
            return redirect(route('profsmatieres.index'));
        }

        $data = ProfMatiere::where('id', $id)->update(request()->except(['_token', '_method']));

        return redirect(route('profsmatieres.index'));

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
        $data = ProfMatiere::find($id);

        if (empty($data)) {
            return redirect(route('profsmatieres.index'));
        }

        $data->delete();

        return redirect(route('profsmatieres.index'));
        //
    }
}
