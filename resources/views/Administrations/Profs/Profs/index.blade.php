@extends('layouts.master')
@section('title')


@endsection

@section('css')

@endsection

@section('content')


{{ Breadcrumbs::render('admin.prof.profs') }}



<div class="content">
    <div class="container-fluid">
        <div class="row">
            <section class="content" style="margin:auto;">
                                               
                            <h4 style="font-style:italic;margin-left: -512px; margin-bottom: -29px; color: #007bff;">{{__('text.Profs.list')}}</h4>
                   
                          <div><a class="'btn btn-success" style="padding: 6px;float:right; margin-right: -518px;"
                                    href="{{ route('profs.create') }}"> &nbsp; <i
                                        class="right fas fa-plus-circle"> &nbsp;</i>{{__('text.Profs.add')}}</a>
                                    
                                        <form method="get" action="{{route('profs.index')}}">
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
                                <th>{{__('text.Nom.lbl')}}</th>
                                <th>{{__('text.Prenom.lbl')}}</th>
                                <th>{{__('text.Cin.lbl')}}</th>
                                <th>{{__('text.Adresse.lbl')}}</th>
                                <th>{{__('text.Date_Naissance.lbl')}}</th>
                                <th>{{__('text.Rib.lbl')}}</th>
                                <th>{{__('text.Tel.lbl')}}</th>
                                <th>{{__('text.Email.lbl')}}</th>
                                <th>{{__('text.Type_Contrat.lbl')}}</th>
                                <th>{{__('text.Salaire.lbl')}}</th>
                                <th>{{__('text.Montant_Par_Heure.lbl')}}</th>
                                <th>{{__('text.Login.lbl')}}</th>
                                <th>{{__('text.Password.lbl')}}</th>
                                <th style="width:100px;">{{__('text.Actions.lbl')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datas as $item)
                            <tr>
                                <td>{{$item->nom}}</td>
                                <td>{{$item->prenom}}</td>
                                <td>{{$item->cin}}</td>
                                <td>{{$item->adresse}}</td>
                                <td>{{$item->date_naissance}}</td>
                                <td>{{$item->rib}}</td>
                                <td>{{$item->tel}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->type_contrat}}</td>
                                <td>{{$item->salaire}}</td>
                                <td>{{$item->montant_par_Heure}}</td>
                                <td>{{$item->login}}</td>
                                <td>{{$item->password}}</td>


                                <td style="text-align:right;">
                                    <form method="delete"  action="{{route('profs.destroy', $item->id)}}">
                                       
            

                                        @csrf
                                        @method('DELETE')
                                        <div class='btn-group'><a href="{{ route('profs.edit', $item->id) }}"
                                                
                                                class='btn btn-primary pull-right'><i class="fas fa-edit"> </i> </a>
                                            <button type="submit" onclick="return myFunction();"
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