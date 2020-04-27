
@extends('layouts.master')
@section('title')
    
@endsection

@section('css')
    
@endsection
@section('content')
{{ Breadcrumbs::render('admin.parametre.salles.add') }}


<!-- start add Modal -->


        <div class="modal-header">
          <h5 style= "font-style:italic ;color: #007bff;" class="modal-title" id="exampleModalLabel">Ajouter </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          </button>
         
  
        </div>
      <form action="{{ action('SallesController@store') }}" method="POST">
  
        {{ csrf_field() }}
        <div class="modal-body">
          
            <div class="form-group">
              <label>{{__('text.Libelle.lbl')}}</label>
              <input type="text" name="libelle" class="form-control" >
              <label>{{__('text.Type_Salle.lbl')}}</label>
              <select style="margin-top: 30px;width: 200px;HEIGHT: 35px;" name="type_salle">
                <option >--------------------------------------</option>
                @foreach ($salle as $item)
            <option value="{{$item->id}}">{{$item->type_salle}}</option>
                @endforeach
            </select>
              <label>{{__('text.Nombre_Place.lbl')}}</label>
              <input type="text" name="nombre_place" class="form-control" >
              
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <input type="button" class="btn btn-primary" value="Go back!" onclick="history.back()">
          <input type="hidden" value="{{Session::token()}}" name="_token">
          <input type="hidden" name="p_id" id="p_id" value="">
      </div>
      </form>
     
    <!-- End add Modal -->
    
    @endsection
    @section('js')

    @endsection