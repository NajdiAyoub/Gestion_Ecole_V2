<?php

namespace App\Http\Controllers;

use App\EmploiDuTempProf;
use Illuminate\Http\Request;

class EmploisDuTempsProfsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = EmploiDuTempProf::all()->toArray();
        return view('Administrations.Profs.emploisdutempsprofs.index')->with('data', $data);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Administrations.Profs.emploisdutempsprofs.create');
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
        $data = EmploiDuTempProf::create($input);
        return redirect(route('emploisdutempsprofs.index'));
        
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
        return redirect(route('emploisdutempsprofs.index'));

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
        $data = EmploiDuTempProf::find($id);

        if (empty($data)) {
            return redirect(route('emploisdutempsprofs.index'));
        }

        return view('Administrations.emploisdutempsprofs.edit')->with('data', $data);
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
        $data = EmploiDuTempProf::find($id);

        if (empty($data)) {
            return redirect(route('emploisdutempsprofs.index'));
        }

        $data = EmploiDuTempProf::where('id', $id)->update(request()->except(['_token', '_method']));

        return redirect(route('emploisdutempsprofs.index'));
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
        $data = EmploiDuTempProf::find($id);

        if (empty($data)) {
            return redirect(route('emploisdutempsprofs.index'));
        }

        $data->delete();

        return redirect(route('emploisdutempsprofs.index'));
        //
        //
    }
}
