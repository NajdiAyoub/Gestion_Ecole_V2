<?php

namespace App\Http\Controllers;

use App\ClasseNiveauFiliere;
use Illuminate\Http\Request;

class ClassesNiveauxFilieresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$datas = ClasseNiveauFiliere::all();

        return view('Administrations.Affectations.ClassesNiveauxFilieres.index');//->with('datas', $datas);

        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Administrations.Affectations.ClassesNiveauxFilieres.create');

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
        $data = ClasseNiveauFiliere::create($input);
        return redirect(route('classesniveauxfilieres.index'));
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
        return redirect(route('classesniveauxfilieres.index'));

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
        $data = ClasseNiveauFiliere::find($id);

        if (empty($data)) {
            return redirect(route('classesniveauxfilieres.index'));
        }

        return view('Administrations.Affectations.ClassesNiveauxFilieres.edit')->with('data', $data);
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
        $data = ClasseNiveauFiliere::find($id);

        if (empty($data)) {
            return redirect(route('classesniveauxfilieres.index'));
        }

        $data = ClasseNiveauFiliere::where('id', $id)->update(request()->except(['_token', '_method']));

        return redirect(route('classesniveauxfilieres.index'));

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
        $data = ClasseNiveauFiliere::find($id);

        if (empty($data)) {
            return redirect(route('classesniveauxfilieres.index'));
        }

        $data->delete();

        return redirect(route('classesniveauxfilieres.index'));
        //
    }
}
