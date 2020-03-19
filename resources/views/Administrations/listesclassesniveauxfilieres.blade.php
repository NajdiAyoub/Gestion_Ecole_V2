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
            <li class="breadcrumb-item"><a href="#">Affectations</a></li>
            <li class="breadcrumb-item active">Classes Niveaux Filieres</li>
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
                <div class="card-header" style="background-color: gray;color: blue;"><strong><em><h4>Listes Eleves</h4></em></strong>

                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                           <th>Classe</th>
                            <th>Prof</th>
                             <th>Niveau</th>
                             <th>Matiere</th>
                             <th>Filiere</th>
                             <th>Semestre</th>
                             <th>Annee_Scolaire</th>
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
                      <td>Presto</td>
            
                      <td><i class="fas fa-eye style="margin-right:top;"></i></td>
                    </tr>
                    
                    <tfoot>
                    <tr>
                      <th>Classe</th>
                      <th>Prof</th>
                      <th>Niveau</th>
                      <th>Matiere</th>
                      <th>Filiere</th>
                      <th>Semestre</th>
                      <th>Annee_Scolaire</th>
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