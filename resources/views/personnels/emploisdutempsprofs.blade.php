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
            <li class="breadcrumb-item"><a href="#">Emplois Du Temps</a></li>
            <li class="breadcrumb-item active">Emplois Du Temps Profs</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

  <div class="content">
    <div class="container-fluid">
      <div class="row">
    
        <section class="content" style="margin:auto;">
          <center>
          <div class="row">
            <div class="col-12">
              <div class="card" style="background-color: #343a40; margin-bottom: 0px;">
                <div class="card-header"><strong><em><h4 style=" position: absolute;
                  color: antiquewhite; margin-top: 8px;"> Emplois Du Temps Profs</h4></em></strong>
                  <div class="mt-4" style="float: right ; margin-top: 0px !important;">
                    <div class="btn btn-primary btn-lg btn-flat" style="font-size:1rem;">
                      <i class="fas fa-plus-circle fa-lg mr-2"></i> 
                      Ajouter Emplois
                    </div>
                  </div>
                </div>
                  
                </div>
                <!-- /.card-header -->
                <div class="card-body" style="padding:0px;">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                           <th>Days</th>
                            <th>08h00-10h00</th>
                             <th>10h00-12h00</th>
                             <th>14h00-16h00</th>
                             <th>16h00-18h00</th>
                              <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    
                    <tr>
                      <td>Lundi</td>
                      <td>Opera for Wii</td>
                      <td>Wii</td>
                      <td>-</td>                
                      <td>Presto</td>
                      <td><i class="fas fa-trash-alt"style="margin-right: 22px;"></i><i class="fas fa-edit style="margin-right:top;"></i></td>

                    </tr>
                    <tr>
                      <td>Mardi</td>
                      <td>Nokia N800</td>
                      <td>N800</td>
                      <td>Nokia N800</td>
                      <td>-</td>
                      <td><i class="fas fa-trash-alt" style="margin-right: 22px;"></i><i class="fas fa-edit style="margin-right:top;"></i></td>

                    </tr>
                   
                    <tr>
                      <td>Mercerdi</td>
                      <td>Konqureror 3.5</td>
                      <td>KDE 3.5</td>
                      <td>Nokia N800</td>
                      <td>3.5</td>
                      <td><i class="fas fa-trash-alt" style="margin-right: 22px;"></i><i class="fas fa-edit style="margin-right:top;"></i></td>

                    </tr>
                    <tr>
                      <td>Jeudi</td>
                      <td>Internet Explorer 4.5</td>
                      <td>Mac OS 8-9</td>
                      <td>Nokia N800</td>

                      <td>-</td>
                      <td><i class="fas fa-trash-alt" style="margin-right: 22px;"></i><i class="fas fa-edit style="margin-right:top;"></i></td>

                    </tr>
                   
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                      <th>Days</th>
                      <th>08h00-10h00</th>
                      <th>10h00-12h00</th>
                      <th>14h00-16h00</th>
                      <th>16h00-18h00</th>
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