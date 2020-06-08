@extends('layouts.master')
@section('title')

@endsection

@section('css')

@endsection
@section('content')

<!-- start add Modal -->
{{ Breadcrumbs::render('admin.parametre.parents.add') }}


<div class="modal-header">
    <h5 style= "font-style:italic ;color: #007bff;" class="modal-title" id="exampleModalLabel" >{{__('text.Parents.add')}}</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    </button>


</div>
<form action="{{ action('ParentsController@store') }}" method="POST">

    {{ csrf_field() }}
    <div class="modal-body">

        <div class="form-group">
            <label> {{ __('text.Nom.lbl') }}</label>
            <input type="text" name="nom" class="form-control">
            <label>{{ __('text.Prenom.lbl') }}</label>
            <input type="text" name="prenom" class="form-control">
            <label>{{ __('text.CIN.lbl') }}</label>
            <input type="text" name="cin" class="form-control">
            <label>{{ __('text.Adresse.lbl') }}</label>
            <input type="text" name="adresse" class="form-control">
            <label>{{ __('text.Sexe.lbl') }}</label></br>
            <input type="radio" id="male" name="sexe" value="male">
            <label for="male">Male</label>
            <input type="radio" id="female" name="sexe" value="female">
            <label for="Female">Female</label></br>
            <label>{{ __('text.Eleves.lbl') }}</label></br>
            <select style="border: 2px solid lightgray; width: 1068px; HEIGHT: 40px;" name="eleves_id">
              <option></option>
              @foreach ($eleves as $item)
          <option value="{{$item->id}}">{{$item->nom}}</option>
              @endforeach
          </select></br>
            <label>{{ __('text.Tel.lbl') }}</label>
            <input type="text" name="tel" class="form-control">
            <label>{{ __('text.Email.lbl') }}</label>
            <input type="text" name="email" class="form-control">

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