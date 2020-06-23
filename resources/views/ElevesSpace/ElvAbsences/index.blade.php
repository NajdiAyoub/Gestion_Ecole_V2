@extends('layouts.master')
@section('title')


@endsection

@section('css')

@endsection

@section('content')

{{ Breadcrumbs::render('elevesspace.elvabsences') }}






<div class="content">
    <div class="container-fluid">
        <div class="row">
            <section class="content" style="margin:auto;">
              

  
                <h4 style="font-style:italic;margin-left: -512px; margin-bottom: -29px; color: #007bff;">{{__('text.AbsencesEleves.list')}}</h4>
                   
                <div><a class="'btn btn-success" style="padding: 6px;float:right; margin-right: -518px;"
                          href="{{ route('elvabsences.create') }}"> &nbsp; <i
                              class="right fas fa-plus-circle"> &nbsp;</i>{{__('text.AbsencesEleves.add')}}</a>
                              <form method="get" action="{{route('elvabsences.index')}}">
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
                      <th>{{__('text.Date_Absence.lbl')}}</th>
                      <th>{{__('text.Matiere.lbl')}}</th>
                      <th>{{__('text.Justifie.lbl')}}</th>

                      <th style="width:100px;">{{__('text.Actions.lbl')}}</th>
                  </tr>
              </thead>
          </table>
      </div>
</div>

           



                    
                               



        @endsection
        @section('js')

        @endsection
