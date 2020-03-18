<?php

namespace App\Http\Controllers;

use App\AbsenceProf;
use Illuminate\Http\Request;

class AbsencesProfsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $data = AbsenceProf::all();
        return view('Administrations.Profs.Absences.index ');
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Administrations.Profs.create');

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
        $data = AbsenceProf::create($input);
        return redirect(route('absencesprofs.index'));
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
        $data = AbsenceProf::find($id);

        if (empty($data)) {
            return redirect(route('absencesprofs.index'));
        }

        return view('Administrations.Profs.Absences.index')->with('datas', $data);
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
        $data = AbsenceProf::find($id);

        if (empty($data)) {
            return redirect(route('absencesprofs.index'));
        }

        $data = AbsenceProf::where('id', $id)->update(request()->except(['_token', '_method']));

        return redirect(route('absencesprofs.index'));
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
        $data = AbsenceProf::find($id);

        if (empty($data)) {
            return redirect(route('absencesprofs.index'));
        }

        $data->delete();

        return redirect(route('absencesprofs.index'));
        //
    }
}
