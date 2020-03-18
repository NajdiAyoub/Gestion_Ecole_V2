
@extends('layouts.master')
@section('title')

@endsection

@section('css')

@endsection
@section('content')

<!-- start add Modal -->
{{ Breadcrumbs::render('admin.parametre.niveaux.add') }}


        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ajouter </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>


        </div>
      <form action="{{ action('NiveauxController@store') }}" method="POST">

        {{ csrf_field() }}
        <div class="modal-body">

            <div class="form-group">
              <label>libelle</label>
              <input type="text" name="libelle" class="form-control" >
              <label>description</label>
              <input type="text" name="description" class="form-control" >
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          <input type="hidden" value="{{Session::token()}}" name="_token">
          <input type="hidden" name="p_id" id="p_id" value="">
      </div>
      </form>

    <!-- End add Modal -->

    @endsection
    @section('js')

    @endsection
