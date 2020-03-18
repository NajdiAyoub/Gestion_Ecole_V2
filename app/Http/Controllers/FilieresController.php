<?php

namespace App\Http\Controllers;

use App\Filiere;
use Illuminate\Http\Request;

class FilieresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $filieres = Filiere::all()->toArray();
        return view('Administrations.Filieres.index', compact('filieres'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Administrations.filieres.create');
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
        $data = Filiere::create($input);
        return redirect(route('filieres.index'))
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
        return redirect(route('filieres.index'));
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
        $data = Filiere::find($id);

        if (empty($data)) {
            return redirect(route('filieres.index'));
        }

        return view('Administrations.filieres.edit')->with('data', $data);
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
        $data = Filiere::find($id);

        if (empty($data)) {
            return redirect(route('filieres.index'));
        }

        $data = Filiere::where('id', $id)->update(request()->except(['_token', '_method']));

        return redirect(route('filieres.index'));
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

        $data = Filiere::find($id);

        if (empty($data)) {
            return redirect(route('filieres.index'));
        }

        $data->delete();

        return redirect(route('filieres.index'));
        //
    }
}