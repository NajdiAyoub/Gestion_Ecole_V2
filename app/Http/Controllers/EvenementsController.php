<?php

namespace App\Http\Controllers;

use App\Evenement;
use Illuminate\Http\Request;

class EvenementsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Evenement::all()->toArray();
        return view('Administrations.evenements.index')->with('data', $data);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Administrations.evenements.create');

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
        $data = Evenement::create($input);
        return redirect(route('evenements.index'));
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
        return redirect(route('evenements.index'));

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
        $data = Evenement::find($id);

        if (empty($data)) {
            return redirect(route('evnements.index'));
        }

        return view('Administrations.evenements.edit')->with('data', $data);
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
        $data = Evenement::find($id);

        if (empty($data)) {
            return redirect(route('evenements.index'));
        }

        $data = Evenement::where('id', $id)->update(request()->except(['_token', '_method']));

        return redirect(route('evenements.index'));
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
        $data = Evenement::find($id);

        if (empty($data)) {
            return redirect(route('evenements.index'));
        }

        $data->delete();

        return redirect(route('evenements.index'));
        //
    }
}
