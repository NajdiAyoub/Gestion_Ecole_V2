<?php

namespace App\Http\Controllers;

use App\PaiementEleve;
use Illuminate\Http\Request;

class PaiementsElevesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = PaiementEleve::all();
        return view('Administrations.Eleves.PaiementsEleves.index')->with('datas', $datas);

        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Administrations.Eleves.PaiementsEleves.create');

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
        //
        $input = $request->all();
        $data = PaiementEleve::create($input);
        return redirect(route('paiementseleves.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect(route('paiementseleves.index'));

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
        $data = PaiementEleve::find($id);

        if (empty($data)) {
            return redirect(route('paiementseleves.index'));
        }

        return view('Administrations.Eleves.PaiementsEleves.edit')->with('data', $data);
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
        $data = PaiementEleve::find($id);

        if (empty($data)) {
            return redirect(route('paiementseleves.index'));
        }

        $data = PaiementEleve::where('id', $id)->update(request()->except(['_token', '_method']));

        return redirect(route('paiementseleves.index'));

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
        $data = PaiementEleve::find($id);

        if (empty($data)) {
            return redirect(route('paiementseleves.index'));
        }

        $data->delete();

        return redirect(route('paiementseleves.index'));
        //
        //
    }
}
