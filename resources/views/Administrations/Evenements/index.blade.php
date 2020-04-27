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
                  <label  
                  " for="search">Search:</label>
                  <input style="margin-right: -273px; margin-top:5px"  type="search" id="search" name="search">
                </div>
  
         
</section>    
  </div>
</div>

            
        
        
        <section class="content" style="margin:auto;">
      
                <!-- /.card-header -->
                <div class="card-body" style="padding:0px;">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                           <th>Libelle</th>
                            <th>Date_Evenements</th>
                             <th>Eleves_Participants</th>
                             <th>Classes</th>
                             <th>Encadrants</th>
                             <th>Details</th>
                              <th>Actions</th>
                  </table>
                </div>
              </center>
                <!-- /.card-body -->
              </div>



    
@endsection
@section('js')
    
@endsection