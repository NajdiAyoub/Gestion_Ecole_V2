<?php

namespace App\Http\Controllers;

use App\EmploiDuTempEleve;
use Illuminate\Http\Request;

class EmploisDuTempsElevesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datas = EmploiDuTempEleve::all();

        return view('Administrations.Eleves.emploisdutemps.index')->with('datas', $datas);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Administrations.Eleves.EmploisDuTemps.create');

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
        $data = EmploiDuTempEleve::create($input);
        return redirect(route('emploisdutempseleves.index'));
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
        return redirect(route('emploisdutemps.index'));

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
        $data = EmploiDuTempEleve::find($id);

        if (empty($data)) {
            return redirect(route('emploisdutemps.index'));
        }

        return view('Administrations.Eleves.EmploisDuTemps.edit')->with('data', $data);
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
        $data = EmploiDuTempEleve::find($id);

        if (empty($data)) {
            return redirect(route('emploisdutempd.index'));
        }

        $data = EmploiDuTempEleve::where('id', $id)->update(request()->except(['_token', '_method']));

        return redirect(route('emploisdutemps.index'));

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
        
        $data = EmploiDuTempEleve::find($id);

        if (empty($data)) {
            return redirect(route('emploisutemps.index'));
        }

        $data->delete();

        return redirect(route('emploisdutemps.index'));
        //
    }
}
