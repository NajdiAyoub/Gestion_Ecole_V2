<?php

namespace App\Http\Controllers;

use App\Eleve;
use App\Parente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ParentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
 //dd($id);
        $search='';
        if(isset($request) && null !==$request->get('search')) {
            $search = $request->get('search');
            //dd($search);
            $datas = DB::table('v_parents')->where('nom', 'like', '%'. $search . '%')
            ->orWhere('prenom' , 'like', '%'. $search . '%')
            ->orWhere('cin' , 'like', '%'. $search . '%')
            ->orWhere('adresse' , 'like', '%'. $search . '%')
            ->orWhere('sexe' , 'like', '%'. $search . '%')
            ->orWhere('eleves' , 'like', '%'. $search . '%')
            ->orWhere('tel' , 'like', '%'. $search . '%')
            ->orWhere('email' , 'like', '%'. $search . '%')->paginate(10);
            //dd($datas->toSql(),$datas->getBindings());
        } 
        else {
            $datas = DB::table('v_parents')->paginate(10);
            //$eleves=Eleve::all();
            //$request = DB::table('eleves')->find($eleves);

        }   
        return view('Administrations.parents.index')->with('datas', $datas )->with('search', $search );

      // $datas = Parente::paginate(10);
        //return view('Administrations.Parents.index')->with('datas',$datas);

        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $eleves= Eleve::all();
        return view('Administrations.Parents.create')->with('eleves', $eleves);
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

            'nom'=> 'required',
            'prenom'=> 'required',
            'cin'=> 'required',
            'adresse'=> 'required',
            'sexe'=> 'required',
            'tel'=> 'required',
            'eleves_id'=> 'required',
            'email'=> 'required',
            

            ]);

        $input = $request->all();
        $data = Parente::create($input);
        $data->save();
        return redirect(route('parents.index'))->with('success', 'Item added succesfully' );
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
        //$request=DB::table('v_parents')->where('id', $id)->first();
     //   return view('Administrations.parents.index')->with('COLUMN_PARENT',$request);
        
       return redirect(route('parents.index'));


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
//dd('ok');

        $eleves= Eleve::all();
        $data = Parente::find($id);

        if (empty($data)) {
            return redirect(route('parents.index'));
        }

        return view('Administrations.parents.edit')->with('data', $data)->with('eleves', $eleves);
    }
        //
    

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

            'nom'=> 'required',
            'prenom'=> 'required',
            'cin'=> 'required',
            'adresse'=> 'required',
            'sexe'=> 'required',
            'tel'=> 'required',
            'eleves_id'=> 'required',
            'email'=> 'required',
            

            ]);
        $data = Parente::find($id);

        if (empty($data)) {
            return redirect(route('parents.index'));
        }

        $data = Parente::where('id', $id)->update(request()->except(['_token', '_method']));

        return redirect(route('parents.index'));
        //
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
        $data = Parente::find($id);

        if (empty($data)) {
            return redirect(route('parents.index'));
        }

        $data->delete();

        return redirect(route('parents.index'));
        //
        //
    }
}
