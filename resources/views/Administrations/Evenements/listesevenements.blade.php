@extends('layouts.master')
@section('title')
    
@endsection

@section('css')
    
@endsection

@section('content')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">{{ __('text.Parametres.lbl') }}</a></li>
            <li class="breadcrumb-item active">{{ __('text.Evenements.lbl') }}</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  


  <div class="content">
    <div class="container-fluid">
      <div class="row">

        
        
        <section class="content" style="margin:auto;">
          <center>
          <div class="row">
            <div class="col-12">
              <div class="card" style="background-color: #343a40; margin-bottom: 0px;">
                <div class="card-header"><strong><em><h4 style=" position: absolute;
                  color: antiquewhite; margin-top: 8px;"> Listes Des Evenements</h4></em></strong>
                  <div class="mt-4" style="float: right ; margin-top: 0px !important;">
                    <div class="btn btn-primary btn-lg btn-flat" style="font-size:1rem;">
                      <i class="fas fa-plus-circle fa-lg mr-2"></i> 
                      Ajouter Evenement
                    </div>
                  </div>
                </div>
                  
                </div>
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
                    </tr>
                    </thead>
                    <tbody>
                    
                    <tr>
                      <td>Presto</td>
                      <td>Opera for Wii</td>
                      <td>Wii</td>
                      <td>-</td>
                      <td>Presto</td>
                
                      <td>Presto</td>
                      <td><i class="fas fa-trash-alt"style="margin-right: 90px;"></i><i class="fas fa-edit style="margin-right:top;"></i></td>
                    </tr>
                    <tr>
                      <td>Presto</td>
                      <td>Nokia N800</td>
                      <td>N800</td>
                      <td>Nokia N800</td>
                      <td>Nokia N800</td>
                      <td>-</td>
                      <td><i class="fas fa-trash-alt"style="margin-right: 90px;"></i><i class="fas fa-edit style="margin-right:top;"></i></td>
                    </tr>
                   
                    <tr>
                      <td>KHTML</td>
                      <td>Konqureror 3.5</td>
                      <td>KDE 3.5</td>
                      <td>Nokia N800</td>
                      <td>Nokia N800</td>

                      <td>3.5</td>
                      <td><i class="fas fa-trash-alt"style="margin-right: 90px;"></i><i class="fas fa-edit style="margin-right:top;"></i></td>
                    </tr>
                    <tr>
                      <td>Tasman</td>
                      <td>Internet Explorer 4.5</td>
                      <td>Mac OS 8-9</td>
                      <td>Nokia N800</td>
                      <td>Nokia N800</td>

                      <td>-</td>
                      <td><i class="fas fa-trash-alt"style="margin-right: 90px;"></i><i class="fas fa-edit style="margin-right:top;"></i></td>
                    </tr>
                   
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                      <th>Libelle</th>
                      <th>Date_Evenements</th>
                      <th>Eleves_Participants</th>
                      <th>Classes</th>
                      <th>Encadrants</th>
                      <th>Details</th>
                      <th>Action</th>
                    </tr>
                    </tfoot>
                  </table>
                </div>
              </center>
                <!-- /.card-body -->
              </div>



    
@endsection
@section('js')
    
@endsection