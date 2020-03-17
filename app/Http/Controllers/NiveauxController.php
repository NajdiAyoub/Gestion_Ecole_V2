<?php

namespace App\Http\Controllers;

use App\niveaux;
use Illuminate\Http\Request;

class NiveauxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = niveaux::all();
        return view('Administrations.Niveaux.index')->with('datas', $datas);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Administrations.Niveaux.create');
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
      //  dd('ok');

      $input = $request->all();
      $data = niveaux::create($input);
      return redirect(route('niveaux.index'));
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
        $data = niveaux::find($id);

        if (empty($data)) {
            return redirect(route('niveaux.index'));
        }

        return view('Administrations.Niveaux.edit')->with('datas', $data);
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
        $data = niveaux::find($id);

        if (empty($data)) {
            return redirect(route('niveaux.index'));
        }

        $data = niveaux::where('id', $id)->update(request()->except(['_token', '_method']));

        return redirect(route('niveaux.index'));

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
        //dd($id);
        $data = niveaux::find($id);

        if (empty($data)) {
            return redirect(route('niveaux.index'));
        }

        $data->delete();

        return redirect(route('niveaux.index'));

        //
    }
}
