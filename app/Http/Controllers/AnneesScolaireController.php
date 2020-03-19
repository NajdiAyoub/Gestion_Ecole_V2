<?php

namespace App\Http\Controllers;

use App\AnneeScolaire;
use App\AnneesScolaire;
use Illuminate\Http\Request;

class AnneesScolaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = AnneeScolaire::all();
        return view('Administrations.AnneesScolaire.index')->with('datas', $datas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Administrations.AnneesScolaire.create');
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
        $data = AnneeScolaire::create($input);
        return redirect(route('anneesscolaire.index'));
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

        return redirect(route('anneesscolaire.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = AnneeScolaire::find($id);

        if (empty($data)) {
            return redirect(route('anneesscolaire.index'));
        }

        return view('Administrations.AnneesScolaire.edit')->with('data', $data);
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
        $data = AnneeScolaire::find($id);

        if (empty($data)) {
            return redirect(route('anneesscolaire.index'));
        }

        $data = AnneeScolaire::where('id', $id)->update(request()->except(['_token', '_method']));

        return redirect(route('anneesscolaire.index'));

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
        $data = AnneeScolaire::find($id);

        if (empty($data)) {
            return redirect(route('anneesscolaire.index'));
        }

        $data->delete();

        return redirect(route('anneesscolaire.index'));

    }
}