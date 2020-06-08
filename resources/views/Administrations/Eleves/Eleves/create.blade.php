
@extends('layouts.master')
@section('title')

@endsection

@section('css')

@endsection
@section('content')

<!-- start add Modal -->
{{ Breadcrumbs::render('admin.eleves.eleves.add') }}


        <div class="modal-header">
          <h5 style= "font-style:italic ;color: #007bff;" class="modal-title" id="exampleModalLabel">{{__('text.Eleves.add')}}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          </button>


        </div>
      <form action="{{ action('ElevesController@store') }}" method="POST">

        {{ csrf_field() }}
        <div class="modal-body">

            <div class="form-group">
              <label>{{__('text.Nom.lbl')}}</label>
              <input type="text" name="nom" class="form-control" >
              <label>{{__('text.Prenom.lbl')}}</label>
              <input type="text" name="prenom" class="form-control" >
              <label>{{__('text.Date_Naissance.lbl')}}</label>
              <input type="date" name="date_naissance" class="form-control" >
              <label>{{__('text.Adresse.lbl')}}</label>
              <input type="text" name="adresse" class="form-control" >
              <label>{{ __('text.Niveaux.lbl') }}</label></br>

              <select style="border: 2px solid lightgray; width: 1068px; HEIGHT: 40px;" name="niveaux_id">
                <option></option>
                @foreach ($niveaux as $item)
            <option value="{{$item->id}}">{{$item->libelle}}</option>
                @endforeach
            </select></br>
            <label>{{ __('text.Classes.lbl') }}</label></br>
    
            <select style="border: 2px solid lightgray; width: 1068px ; HEIGHT: 40px;" name="classes_id">
              <option></option>
              @foreach ($Classe as $item)
          <option value="{{$item->id}}">{{$item->libelle}}</option>
              @endforeach
          </select></br>

          <label>{{ __('text.Filieres.lbl') }}</label></br>
    
            <select style="border: 2px solid lightgray; width: 1068px ; HEIGHT: 40px;" name="filieres_id">
              <option></option>
              @foreach ($Filiere as $item)
          <option value="{{$item->id}}">{{$item->libelle}}</option>
              @endforeach
          </select></br>
            <label>{{__('text.Emails.lbl')}}</label></br>
            <input type="text" name="email" class="form-control" >
              <label>{{__('text.Image.lbl')}}</label></br>
              <input type="file" name="image" class="form-control" >
              <label>{{__('text.Login.lbl')}}</label>
              <input type="text" name="login" class="form-control" >
              <label>{{__('text.Password.lbl')}}</label>
              <input type="password" name="password" class="form-control" > 
            </div>
            <button type="submit" class="btn btn-primary">{{__('text.soumettre.btn')}}</button>
            <input type="button" class="btn btn-primary" value="Go back!" onclick="history.back()">
          <input type="hidden" value="{{Session::token()}}" name="_token">
          <input type="hidden" name="p_id" id="p_id" value="">
      </div>
      </form>

    <!-- End add Modal -->

    @endsection
    @section('js')

    @endsection
