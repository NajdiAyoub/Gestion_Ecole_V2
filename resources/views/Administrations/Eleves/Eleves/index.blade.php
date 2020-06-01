@extends('layouts.master')
@section('title')


@endsection

@section('css')

@endsection

@section('content')


{{ Breadcrumbs::render('admin.eleves.eleves') }}



<div class="content">
    <div class="container-fluid">
        <div class="row">
            <section class="content" style="margin:auto;">
                                               
                            <h4 style="font-style:italic;margin-left: -512px; margin-bottom: -29px; color: #007bff;">{{__('text.Eleves.list')}}</h4>
                   
                          <div><a class="'btn btn-success" style="padding: 6px;float:right; margin-right: -518px;"
                                    href="{{ route('eleves.create') }}"> &nbsp; <i
                                        class="right fas fa-plus-circle"> &nbsp;</i>{{__('text.Eleves.add')}}</a>
                                    
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
                                <th>{{__('text.Date_Naissance.lbl')}}</th>
                                <th>{{__('text.Parents.lbl')}}</th>
                                <th>{{__('text.Adresse.lbl')}}</th>
                                <th>{{__('text.Email.lbl')}}</th>
                                <th>{{__('text.Niveaux.lbl')}}</th>
                                <th>{{__('text.Filiere.lbl')}}</th>
                                <th>{{__('text.Classe.lbl')}}</th>
                                <th>{{__('text.Image.lbl')}}</th>
                                <th>{{__('text.Login.lbl')}}</th>
                                <th>{{__('text.Password.lbl')}}</th>
                                <th style="width:100px;">{{__('text.Actions.lbl')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datas as $item)
                            <tr>
                                <td>{{$item['nom']}}</td>
                                <td>{{$item['prenom']}}</td>
                                <td>{{$item['date_naissance']}}</td>
                                <td>{{$item['parents_id']}}</td>
                                <td>{{$item['adresse']}}</td>
                                <td>{{$item['email']}}</td>
                                <td>{{$item['niveaux_id']}}</td>
                                <td>{{$item['filieres_id']}}</td>
                                <td>{{$item['classes_id']}}</td>
                                <td>{{$item['image']}}</td>
                                <td>{{$item['login']}}</td>
                                <td>{{$item['password']}}</td>


                                <td style="text-align:right;">
                                    <form method="delete"  action="{{route('eleves.destroy', $item->id)}}">
                                       
            

                                        @csrf
                                        @method('DELETE')
                                        <div class='btn-group'><a href="{{ route('eleves.edit', $item->id) }}"
                                                
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