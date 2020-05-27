
@extends('layouts.master')
@section('title')

@endsection

@section('css')

@endsection
@section('content')

<!-- start add Modal -->
{{ Breadcrumbs::render('admin.prof.paiementsprofs.add') }}


        <div class="modal-header">
          <h5 style= "font-style:italic ;color: #007bff;" class="modal-title" id="exampleModalLabel">{{__('text.PaiementsProfs.add')}}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          </button>


        </div>
      <form action="{{ action('ProfsController@store') }}" method="POST">

        {{ csrf_field() }}
        <div class="modal-body">

            <div class="form-group">
              <label>{{__('text.Profs.lbl')}}</label>
              <select style="border: 2px solid lightgray; width: 200px;HEIGHT: 30px;" name="profs_id">
                <option >--------------------------------------</option>
                @foreach (profs as $item)
            <option value="{{$item->id}}">{{$item->nom}}</option>
                @endforeach
              <label>{{__('text.NombreHeures.lbl')}}</label>
              <input type="text" name="nombre heures" class="form-control" >
              <label>{{__('text.Montant_par_Heures.lbl')}}</label>
              <input type="text" name="montant_par_heure" class="form-control" >
              <label>{{__('text.Date_Paiements.lbl')}}</label>
              <input type="date" name="date_paiements" class="form-control" >
              <label>{{__('text.Type_Paiements.lbl')}}</label>
              <input type="text" name="type_paiements" class="form-control" >
              <label>{{__('text.Salaire.lbl')}}</label>
              <input type="text" name="salaire" class="form-control" >
              <label>{{__('text.Somme.lbl')}}</label>
              <input type="text" name="somme" class="form-control" >
              
              
              
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
