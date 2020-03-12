<?php

namespace App\Http\Controllers;

use App\Classe;
use App\Salle;
use Illuminate\Http\Request;

class ClassesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        $datas = Classe::all();
        return view('Administrations.Classes.index')->with('datas', $datas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Administrations.Classes.create');
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
        $data = Classe::create($input);
        return redirect(route('Classes.index'));
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
        return redirect(route('listesclasses.index'));
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
        $data = Classe::find($id);

        if (empty($data)) {
            return redirect(route('listesclasses.index'));
        }

        return view('Administrations.Classes.edit')->with('data', $data);
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
        $data = Classe::find($id);

        if (empty($data)) {
            return redirect(route('listeclasses.index'));
        }

        $data = Classe::where('id', $id)->update(request()->except(['_token', '_method']));

        return redirect(route('listesclasses.index'));

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
        $data = Classe::find($id);

       if (empty($data)) {
           return redirect(route('listesclasses.index'));
        }

        $data->delete();

        return redirect(route('listesclasses.index'));
        //
    }
}
