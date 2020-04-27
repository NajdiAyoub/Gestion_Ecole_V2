<?php

namespace App\Http\Controllers;

use App\Prof;
use Illuminate\Http\Request;

class ProfsController extends Controller
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
            $datas =Prof::where('nom', 'like', '%'. $search . '%')->paginate(10);
            //dd($datas->toSql(),$datas->getBindings());
        } 
        else {
            $datas = Prof::paginate(10);

        }   
        return view('Administrations.Profs.Profs.index')->with('datas', $datas )->with('search', $search );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Administrations.Profs.Profs.create');
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
      $data = Prof::create($input);
      return redirect(route('profs.index'))->with('success', 'Item added succesfully' );
      dd('$data');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect(route('profs.index'));

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
        $data = Prof::find($id);

        if (empty($data)) {
            return redirect(route('profs.index'));
        }
  
        return view('Administrations.Profs.Profs.edit')->with('data', $data);
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
        $data = Prof::find($id);

        if (empty($data)) {
            return redirect(route('profs.index'));
        }
  
        $data = Prof::where('id', $id)->update(request()->except(['_token', '_method']));
  
        return redirect(route('profs.index'));
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
        $data = Prof::find($id);

        if (empty($data)) {
            return redirect(route('profs.index'));
        }

        $data->delete();

        return redirect(route('profs.index'));
        //
    }
}
