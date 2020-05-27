<?php

namespace App\Http\Controllers;

use App\PaiementProf;
use App\Prof;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaiementsProfsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search='';
        if(isset($request) && null !==$request->get('search')) {
            $search = $request->get('search');
            //dd($search);
            $data = DB::table('v_paiementsprofs')->where('libelle', 'like', '%'. $search . '%')->paginate(10);
            //dd($datas->toSql(),$datas->getBindings());
        } 
        else {
            $datas = DB::table('v_paiementsprofs')->paginate(10);

        }   
        return view('Administrations.Profs.paiements.index')->with('datas', $datas )->with('search', $search );        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $profs = Prof::all();
        
        return view('Administrations.Profs.paiements.create')->with('profs',$profs);

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
        //dd($input);

        $data = PaiementProf::create($input);
        $data->save();
        return redirect(route('paiements.index'))->with('success', 'Item added succesfully' );
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
        return redirect(route('paiements.index'));

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
        $data = PaiementProf::find($id);

        if (empty($data)) {
            return redirect(route('paiements.index'));
        }
        $profs = Prof::all();

        return view('Administrations.Profs.paiements.edit')->with('data', $data)->with('profs', $profs);
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
        $data = PaiementProf::find($id);

        if (empty($data)) {
            return redirect(route('paiements.index'));
        }

        $data = PaiementProf::where('id', $id)->update(request()->except(['_token', '_method']));

        return redirect(route('paiements.index'));
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
        $data = PaiementProf::find($id);

        if (empty($data)) {
            return redirect(route('paiements.index'));
        }

        $data->delete();

        return redirect(route('paiements.index'));
        //
    }
}
