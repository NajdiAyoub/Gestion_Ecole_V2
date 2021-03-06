@extends('layouts.master')
@section('title')

@endsection

@section('css')

@endsection
@section('content')
{{ Breadcrumbs::render('admin.parametre.classes.add') }}


<!-- start add Modal -->


<div class="modal-header">
    <h5 style= "font-style:italic ;color: #007bff;" class="modal-title" id="exampleModalLabel" >{{__('text.Classes.add')}}</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    </button>


</div>
<form action="{{ action('ClassesController@store') }}" method="POST">

    {{ csrf_field() }}
    <div class="modal-body">

        <div class="form-group">
            <label> {{ __('text.Libelle.lbl') }}</label>
            <input type="text" name="libelle" class="form-control">
            <label>{{ __('text.Niveaux.lbl') }}</label></br>
            <select style="border: 2px solid lightgray; width: 1068px;HEIGHT: 40px;" name="niveaux_id">
                <option ></option>
                @foreach ($niveaux as $item)
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