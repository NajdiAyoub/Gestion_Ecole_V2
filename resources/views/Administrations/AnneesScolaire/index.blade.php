@extends('layouts.master')
@section('title')


@endsection

@section('css')

@endsection

@section('content')


{{ Breadcrumbs::render('admin.parametre.anneesscolaire') }}



<div class="content">
    <div class="container-fluid">
        <div class="row">
            <section class="content" style="margin:auto;">
                                               
                            <h4 style="font-style:italic;margin-left: -512px; margin-bottom: -29px; color: #007bff;">{{__('text.AnneesScolaire.list')}}</h4>
                   
                          <div><a class="'btn btn-success" style="padding: 6px;float:right; margin-right: -518px;"
                                    href="{{ route('anneesscolaire.create') }}"> &nbsp; <i
                                        class="right fas fa-plus-circle"> &nbsp;</i>{{__('text.AnneesScolaire.add')}}</a>
                                    
                                        <form method="get" action="{{route('anneesscolaire.index')}}">
                                        <label for="search">Search:</label>
                                        <input style="margin-right: -273px; margin-top:5px" value="{{$search??''}}" type="search" id="search" name="search">
                                        </form>
                                    </div>
                        
                                      

            </section>    
                        </div>
                    </div>
                
                <!-- /.card-header -->
                
                <div class="card-body" >
                    <table id="example2" class="table table-bordered table-hover">
                      <thead>
                      <tr>
                                <th>{{__('text.libelle.lbl')}}</th>
                                <th style="width:100px;">{{__('text.Actions.lbl')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datas as $item)
                            <tr>
                                <td>{{$item['libelle']}}</td>
                                <td style="text-align:right;">
                                    <form method="delete" onclick="return myFunction();" action="{{route('anneesscolaire.destroy', $item->id)}}">
                                       
            

                                        @csrf
                                        @method('DELETE')
                                        <div class='btn-group'><a href="{{ route('anneesscolaire.edit', $item->id) }}"
                                                
                                                class='btn btn-primary pull-right'><i class="fas fa-edit"> </i> </a>
                                            <button type="submit"
                                                class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                        </div>

                                        
                                    </form>

                                </td>
                            </tr>
                            

                            @endforeach

                        </tbody>

                    </table>
                    {{ $datas->links() }}

                </div>
                <!-- /.card-body -->
        </div>
        <script>
            function myFunction() {
                if(!confirm("Are You Sure to delete this"))
                event.preventDefault();
            }
           </script>

        @endsection
        @section('js')

        @endsection