<?php

namespace App\Http\Controllers;

use App\ClasseExam;
use App\EmploiDuTempEleve;
use Illuminate\Http\Request;

class ClassesExamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$datas = ClasseExam::all();

        return view('Administrations.Affectations.ClassesExams.index');//->with('datas', $datas);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Administrations.Affectations.Classesexams.create');

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
        $data = ClasseExam::create($input);
        return redirect(route('classesexams.index'));
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
        return redirect(route('classesexams.index'));

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
        $data = ClasseExam::find($id);

        if (empty($data)) {
            return redirect(route('classesexams.index'));
        }

        return view('Administrations.Affectations.ClassesExams.edit')->with('data', $data);
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
        $data = ClasseExam::find($id);

        if (empty($data)) {
            return redirect(route('classesexams.index'));
        }

        $data = ClasseExam::where('id', $id)->update(request()->except(['_token', '_method']));

        return redirect(route('classesexams.index'));

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
        
        $data = ClasseExam::find($id);

        if (empty($data)) {
            return redirect(route('classesexams.index'));
        }

        $data->delete();

        return redirect(route('classesexams.index'));
        //
    }
}
