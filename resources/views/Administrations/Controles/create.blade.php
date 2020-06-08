@extends('layouts.master')
@section('title')

@endsection

@section('css')

@endsection
@section('content')

<!-- start add Modal -->
{{ Breadcrumbs::render('admin.parametre.controles.add') }}


<div class="modal-header">
    <h5 style= "font-style:italic ;color: #007bff;" class="modal-title" id="exampleModalLabel" >{{__('text.Ajouter_Controles.lbl')}}</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    </button>


</div>
<form action="{{ action('ControlesController@store') }}" method="POST">

    {{ csrf_field() }}
    <div class="modal-body">

        <div class="form-group">
            <label> {{ __('text.Libelle.lbl') }}</label>
            <input type="text" name="libelle" class="form-control">

            <label> {{ __('text.Profs.lbl') }}</label></br>
            <select style="border: 2px solid lightgray; width: 1068px;HEIGHT: 40px;" name="profs_id">
                <option></option>
                @foreach ($profs as $item)
            <option value="{{$item->id}}">{{$item->nom}}</option>
                @endforeach
            </select></br>
            <label> {{ __('text.Classes.lbl') }}</label></br>
            <select style="border: 2px solid lightgray; width: 1068px; HEIGHT: 40px;" name="classes_id">
                <option ></option>
                @foreach ($Classe as $item)
            <option value="{{$item->id}}">{{$item->libelle}}</option>
                @endforeach
            </select></br>
            <label> {{ __('text.Matieres.lbl') }}</label></br>
            <select style="border: 2px solid lightgray; width: 1068px;HEIGHT: 40px;" name="matieres_id">
                <option></option>
                @foreach ($Matiere as $item)
            <option value="{{$item->id}}">{{$item->libelle}}</option>
                @endforeach
            </select></br>
            <label> {{ __('text.Semestres.lbl') }}</label></br>
            <select style="border: 2px solid lightgray; width: 1068px; HEIGHT: 40px;" name="semestres_id">
                <option></option>
                @foreach ($Semestre as $item)
            <option value="{{$item->id}}">{{$item->libelle}}</option>
                @endforeach
            </select>
            
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