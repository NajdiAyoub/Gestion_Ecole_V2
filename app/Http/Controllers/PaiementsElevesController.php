<?php

namespace App\Http\Controllers;

use App\Eleve;
use App\PaiementEleve;
use App\Parente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaiementsElevesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $search='';
        if(isset($request) && null !==$request->get('search')) {
            $search = $request->get('search');
            //dd($search);
            $datas = DB::table('v_paiementseleves')->where('eleve', 'like', '%'. $search . '%')
            ->orWhere('parents' , 'like', '%'. $search . '%')
            ->orWhere('date_paiements' , 'like', '%'. $search . '%')
            ->orWhere('type_paiements' , 'like', '%'. $search . '%')
            ->orWhere('somme_paiements' , 'like', '%'. $search . '%')->paginate(10);
            //dd($datas->toSql(),$datas->getBindings());
        } 
        else {
            $datas = DB::table('v_paiementseleves')->paginate(10);

        }   
        return view('Administrations.Eleves.PaiementsEleves.index')->with('datas', $datas )->with('search', $search );        //
    

        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
        $eleves = Eleve::all();
        $parents = Parente::all();
        
        return view('Administrations.Eleves.PaiementsEleves.create')->with('eleves',$eleves)->with('parents',$parents);

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
    
        $request->validate([

            'eleves_id'=> 'required',
            'parents_id'=> 'required',
            'date_paiements'=> 'required',
            'type_paiements'=> 'required',
            'somme_paiements'=> 'required',
            ]);



        $input = $request->all();
        //dd($input);

        $data = PaiementEleve::create($input);
        $data->save();
        return redirect(route('paiementseleves.index'))->with('success', 'Item added succesfully' );
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
        return redirect(route('paiementseleves.index'));

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
        $data = PaiementEleve::find($id);

        if (empty($data)) {
            return redirect(route('paiementseleves.index'));
        }
        $eleves = Eleve::all();
        $parents = Parente::all();



        return view('Administrations.Eleves.PaiementsEleves.edit')->with('data', $data)->with('eleves', $eleves)->with('parents', $parents);
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
        $request->validate([

            'eleves_id'=> 'required',
            'parents_id'=> 'required',
            'date_paiements'=> 'required',
            'type_paiements'=> 'required',
            'somme_paiements'=> 'required',
            ]);
            
        $data = PaiementEleve::find($id);

        if (empty($data)) {
            return redirect(route('paiementseleves.index'));
        }

        $data = PaiementEleve::where('id', $id)->update(request()->except(['_token', '_method']));

        return redirect(route('paiementseleves.index'));

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
        $data = PaiementEleve::find($id);

        if (empty($data)) {
            return redirect(route('paiementseleves.index'));
        }

        $data->delete();

        return redirect(route('paiementseleves.index'));
        //
        //
    }
}
