<?php

namespace App\Http\Controllers;

use App\Salle;
use Illuminate\Http\Request;

class SallesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Salle::all();
        return view('personnels.Salles.index')->with('datas', $datas);

        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('personnels.Salles.create');

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
      $data = Salle::create($input);
      return redirect(route('listessalles.index'));
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

        $data = Salle::find($id);

        if (empty($data)) {
            return redirect(route('listessalles.index'));
        }

        return view('personnels.Salles.edit')->with('datas', $data);
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

        $data = Salle::find($id);

        if (empty($data)) {
            return redirect(route('listessalles.index'));
        }

        $data = Salle::where('id', $id)->update(request()->except(['_token', '_method']));

        return redirect(route('listessalles.index'));
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
        dd($id);
        $data = Salle::find($id);

        if (empty($data)) {
            return redirect(route('listessalles.index'));
        }

        Salle::delete($id);

        return redirect(route('listessalle.index'));
        //
    }
}
