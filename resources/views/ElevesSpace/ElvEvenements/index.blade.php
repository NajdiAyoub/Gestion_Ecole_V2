@extends('layouts.master')
@section('title')


@endsection

@section('css')

@endsection

@section('content')

{{ Breadcrumbs::render('admin.parametre.evenements') }}



<div class="content">
    <div class="container-fluid">
        <div class="row">

<div class="content-header" style="margin: auto;">
    <!-- Button trigger modal -->

    
  
    <h4 style="font-style:italic;margin-left: -512px; margin-bottom: -29px; color: #007bff;">{{__('text.Evenements.list')}}</h4>
                   
    <div><a class="'btn btn-success" style="padding: 6px;float:right; margin-right: -518px;"
              href="{{ route('evenements.create') }}"> &nbsp; <i
                  class="right fas fa-plus-circle"> &nbsp;</i>{{__('text.Evenements.add')}}</a>
                  <form method="get" action="{{route('evenements.index')}}">
                    <label for="search">Search:</label>
                    <input style="margin-right: -273px; margin-top:5px" value="{{$search??''}}" type="search" id="search" name="search">
                    </form>
                </div>
  
         
</section>    
  </div>
</div>

                        <!-- /.card-header -->
                        <div class="card-body" style="padding:0px;">
                            <table id="example2" class="table table-bordered table-hover">
                                
                                    <tr>
                                        <th>{{__('text.Libelle.lbl')}}</th>
                                        <th>{{__('text.Date_Evenements.lbl')}}</th>
                                        <th>{{__('text.Classe.lbl')}}</th>
                                        <th>{{__('text.Prof.lbl')}}</th>
                                        <th>{{__('text.Details.lbl')}}</th>
                                       
                                        <th style="width:100px;">{{__('text.Actions.lbl')}}</th>
                                    </tr>
                            </table>
                                   
                                    </div>
                                      </div>
                                     </div>
                                    </div>                <!-- /.card-body -->
      


        @endsection
        @section('js')

        @endsection
