@extends('layouts.master')
@section('title')

    
@endsection

@section('css')
    
@endsection

@section('content')
<div class="content-header">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Annees Scolaire</a></li>
            <li class="breadcrumb-item active">Listes Annees Scolaire</li>
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
                <div class="card-header"><strong><em><h4 style="color: antiquewhite; margin-top: 8px;"> Listes Annees Scolaire</h4></em></strong>
                  <div class="mt-4" style="float: right ; margin-top: 0px !important;">
                    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="margin-right: 15px;">
  <i class="right fas fa-plus-circle"></i>
  Ajouter
 
</button>

<!-- start add Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter Annees Scolaire</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
       

      </div>
    <form action="{{ action('AnneesScolaireController@store') }}" method="POST">

      {{ csrf_field() }}
      <div class="modal-body">
        
          <div class="form-group">
            <label>libelle</label>
            <input type="text" name="libelle" class="form-control" >
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        <!-- <input type="hidden" value="{{Session::token()}}" name="_token">-->
        
      </div>
      </div>
    </form>
    </div>
  </div>
  <!-- End add Modal -->


<!-- start edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Editer Annees Scolaire</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
       

      </div>
    <form action="{{ action('AnneesScolaireController@update',$id ?? '') }}" method="POST">

      {{ csrf_field() }}
      {{ method_field('PUT') }}
      <div class="modal-body">
        
          <div class="form-group">
            <label>libelle</label>
            <input type="text" name="libelle" id="libelle" value ="{{ $anneesscolaire->libelle }}" class="form-control" >
          </div>
          <button type="submit" class="btn btn-primary">Edit</button>
        <!-- <input type="hidden" value="{{Session::token()}}" name="_token">-->
        
      </div>
      </div>
    </form>
    </div>
</div>

<!-- End add Modal -->





</div>

<!-- End add Modal -->


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
                              <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach ($anneesscolaire as $item)  
                    <tr>
                      <td>{{$item['libelle']}}</td>
                      <td><i class="fas fa-trash-alt"style="margin-right: 90px;"></i><a href="" data-toggle="modal" data-target="#editModal"><i class="fas fa-edit style="margin-right:top;"></i></a></td>
                    </tr>
                    @endforeach
                    
                    
                    </tbody>
                    
                  </table>
                </div>
              </center>
                <!-- /.card-body -->
              </div>
              <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
              <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
              <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
              <script>

       //$(document).ready(function(){
        //$('.editbtn').on('click', function(){
         //$('#editModal').modal('show');
         //$tr = $(this).closest('tr');
        //var data = $tr.children("td").map(function(){

          //return $(this).text();
        //}).get();
        //console.log(data);
        //$('#libelle').val(data[0]);

       //});
      //});



    </script>
@endsection
@section('js')
    
@endsection