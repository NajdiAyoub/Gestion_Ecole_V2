<?php

namespace App\Http\Controllers;

use App\Attachement;
use Illuminate\Http\Request;

class AttachementsController extends Controller
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
            $datas =Attachement::where('filename', 'like', '%'. $search . '%') ->Orwhere('type', 'like', '%'. $search . '%') ->Orwhere('date_attach', 'like', '%'. $search . '%')->paginate(10);
            //dd($datas->toSql(),$datas->getBindings());
        } 
        else {
            $datas = Attachement::paginate(10);

        }   
        return view('Administrations.Attachements.index')->with('datas', $datas )->with('search', $search );
        

        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $attachements = Attachement::all();
        return view('Administrations.Attachements.create')->with('attachement', $attachements);

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

            'filename'=> 'required',
            'type'=> 'required',
            'date_attach'=> 'required',

            ]);
            $input = $request->all();
            $data = Attachement::create($input);
            return redirect(route('attachements.index'))->with('success', 'Item added succesfully' );
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
        return redirect(route('attachements.index'));

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
         
        $data = Attachement::find($id);

        if (empty($data)) {
            return redirect(route('attachements.index'));
        }

        return view('Administrations.Attachements.edit')->with('data', $data);
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

            'filename'=> 'required',
            'type'=> 'required',
            'date_attach'=> 'required',

            ]);
        $data = Attachement::find($id);

        if (empty($data)) {
            return redirect(route('attachements.index'));
        }

        $data = Attachement::where('id', $id)->update(request()->except(['_token', '_method']));

        return redirect(route('attachements.index'))->with('success', 'Item Updated succesfully' );

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
        $data = Attachement::find($id);

        if (empty($data)) {
            return redirect(route('attachements.index'));
        }

        $data->delete();

        return redirect(route('attachements.index'));

        //
    }
}
