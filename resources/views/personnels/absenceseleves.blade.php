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
            <li class="breadcrumb-item"><a href="#">Absences</a></li>
            <li class="breadcrumb-item active">AbsencesEleves</li>
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
              <div class="card">
                <div class="card-header" style="background-color: gray;color: blue;"><strong><em><h4>Listes Absences Eleves</h4></em></strong>

                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th>Nom</th>
                      <th>Prenom</th>
                           <th>Date Absences</th>
                            <th>Seance</th>
                             <th>Matieres</th>
                             <th>Justifie</th>
                             <th>Semestres</th>
                              <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    
                    <tr>
                      <td>Presto</td>
                      <td>Opera for Wii</td>
                      <td>Wii</td>
                      <td>Konqureror 3.5</td>
                      <td>Konqureror 3.5</td>
                      <td>-</td>                
                      <td>Presto</td>
                      <td><i class="fas fa-eye style="margin-right:top;"></i></td>
                    </tr>
                    <tr>
                      <td>Presto</td>
                      <td>Nokia N800</td>
                      <td>N800</td>
                      <td>Konqureror 3.5</td>
                      <td>Konqureror 3.5</td>
                      <td>Nokia N800</td>
                      <td>-</td>
                      <td>A</td>
                    </tr>
                   
                    <tr>
                      <td>KHTML</td>
                      <td>Konqureror 3.5</td>
                      <td>Konqureror 3.5</td>
                      <td>Konqureror 3.5</td>
                      <td>KDE 3.5</td>
                      <td>Nokia N800</td>
                      <td>3.5</td>
                      <td>A</td>
                    </tr>
                    <tr>
                      <td>Tasman</td>
                      <td>Internet Explorer 4.5</td>
                      <td>Mac OS 8-9</td>
                      <td>Nokia N800</td>

                      <td>-</td>
                      <td>X</td>
                    </tr>
                   
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                      <th>Nom</th>
                      <th>Prenom</th>
                      <th>Date Absences</th>
                      <th>Seance</th>
                      <th>Matieres</th>
                      <th>Justifie</th>
                      <th>Semestres</th>
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