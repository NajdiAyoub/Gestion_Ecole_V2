
@extends('layouts.master')
@section('title')

@endsection

@section('css')

@endsection
@section('content')

<!-- start add Modal -->
{{ Breadcrumbs::render('admin.prof.profs.add') }}


        <div class="modal-header">
          <h5 style= "font-style:italic ;color: #007bff;" class="modal-title" id="exampleModalLabel">{{__('text.Profs.add')}}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          </button>


        </div>
      <form action="{{ action('ProfsController@store') }}" method="POST">

        {{ csrf_field() }}
        <div class="modal-body">

            <div class="form-group">
              <label>{{__('text.Nom.lbl')}}</label>
              <input type="text" name="nom" class="form-control" >
              <label>{{__('text.Prenom.lbl')}}</label>
              <input type="text" name="prenom" class="form-control" >
              <label>{{__('text.Cin.lbl')}}</label>
              <input type="text" name="cin" class="form-control" >
              <label>{{__('text.Adresse.lbl')}}</label>
              <input type="text" name="adresse" class="form-control" >
              <label>{{__('text.Date_Naissance.lbl')}}</label>
              <input type="date" name="date_naissance" class="form-control" >
              <label>{{__('text.Rib.lbl')}}</label>
              <input type="text" name="rib" class="form-control" >
              <label>{{__('text.Tel.lbl')}}</label>
              <input type="text" name="tel" class="form-control" >
              <label>{{__('text.Email.lbl')}}</label>
              <input type="text" name="email" class="form-control" >
              <label>{{__('text.Type_Contrat.lbl')}}</label>
              <input type="text" name="type_contrat" class="form-control" >
              <label>{{__('text.Salaire.lbl')}}</label>
              <input type="text" name="salaire" class="form-control" >
              <label>{{__('text.Montant_Par_Heure.lbl')}}</label>
              <input type="text" name="montant_par_heure" class="form-control" >
              <label>{{__('text.Login.lbl')}}</label>
              <input type="text" name="login" class="form-control" >
              <label>{{__('text.Password.lbl')}}</label>
              <input type="password" name="password" class="form-control" >
              
              
            </div>
            <button type="submit" class="btn btn-primary">{{__('text.soumettre.btn')}}</button>
            <input type="button" class="btn btn-primary" value="{{__('text.revenir.btn')}}" onclick="history.back()">
          <input type="hidden" value="{{Session::token()}}" name="_token">
          <input type="hidden" name="p_id" id="p_id" value="">
      </div>
      </form>

    <!-- End add Modal -->

    @endsection
    @section('js')

    @endsection
