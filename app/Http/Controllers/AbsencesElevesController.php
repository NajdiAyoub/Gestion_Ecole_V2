<?php

namespace App\Http\Controllers;

use App\AbsenceEleve;
use App\Eleve;
use Illuminate\Http\Request;

class AbsencesElevesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       // $datas = AbsenceEleve::all();
       $search='';
       if(isset($request) && null !==$request->get('search')) {
           $search = $request->get('search');
           //dd($search);
           $datas =AbsenceEleve::where('nom', 'like', '%'. $search . '%')->paginate(10);
           //dd($datas->toSql(),$datas->getBindings());
       } 
       else {
           $datas = AbsenceEleve::paginate(10);

       }   
       return view('Administrations.Eleves.Absences.index')->with('datas', $datas )->with('search', $search );


        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Administrations.Eleves.Absences.create');

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
        $data = AbsenceEleve::create($input);
        return redirect(route('absenceseleves.index'));
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
        return redirect(route('absenceseleves.index'));

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
        $data = AbsenceEleve::find($id);

        if (empty($data)) {
            return redirect(route('absenceseleves.index'));
        }

        return view('Administrations.Eleves.Absences.edit')->with('data', $data);
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
        $data = AbsenceEleve::find($id);

        if (empty($data)) {
            return redirect(route('absenceseleves.index'));
        }

        $data = AbsenceEleve::where('id', $id)->update(request()->except(['_token', '_method']));

        return redirect(route('absenceseleves.index'));

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
        $data = AbsenceEleve::find($id);

        if (empty($data)) {
            return redirect(route('absenceseleves.index'));
        }

        $data->delete();

        return redirect(route('absenceseleves.index'));
        //
    }
}
