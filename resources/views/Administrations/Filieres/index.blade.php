@extends('layouts.master')
@section('title')


@endsection

@section('css')

@endsection

@section('content')
{{ Breadcrumbs::render('admin.parametre.filieres') }}

<div class="content">
    <div class="container-fluid">
        <div class="row">

<div class="content-header" style="margin: auto;">
    <!-- Button trigger modal -->

    
  
    <h4 style="font-style:italic;margin-left: -512px; margin-bottom: -29px; color: #007bff;">{{__('text.Filieres.list')}}</h4>
                   
    <div><a class="'btn btn-success" style="padding: 6px;float:right; margin-right: -518px;"
              href="{{ route('filieres.create') }}"> &nbsp; <i
                  class="right fas fa-plus-circle"> &nbsp;</i>{{__('text.Filieres.add')}}</a>
                  <label  
                  " for="search">Search:</label>
                  <input style="margin-right: -273px; margin-top:5px"  type="search" id="search" name="search">
                </div>
  
         
</section>    
  </div>
</div>

    
                     
                        <!-- /.card-header -->
                        <div class="card-body" style="padding:0px;">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Libelle</th>
                                        <th>Niveaux</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>SM</td>
                                        <td>2eme annees</td>
                                        <td><i class="fas fa-trash-alt" style="margin-right: 90px;"></i><i
                                                class="fas fa-edit style=" margin-right:top;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>PC</td>
                                        <td>2eme annees</td>
                                        <td><i class="fas fa-trash-alt" style="margin-right: 90px;"></i><i
                                                class="fas fa-edit style=" margin-right:top;"></i></td>

                                    </tr>

                                    <tr>
                                        <td>SECO</td>
                                        <td>2eme annees</td>
                                        <td><i class="fas fa-trash-alt" style="margin-right: 90px;"></i><i
                                                class="fas fa-edit style=" margin-right:top;"></i></td>

                                    </tr>
                                    <tr>
                                        <td>SVT</td>
                                        <td>2eme annees</td>

                                        <td><i class="fas fa-trash-alt" style="margin-right: 90px;"></i><i
                                                class="fas fa-edit style=" margin:auto;"></i></td>

                                    </tr>

                                </tbody>

                            </table>
                        </div>
                    </center>
                    <!-- /.card-body -->
            </div>
           
            @endsection
            @section('js')

            @endsection
