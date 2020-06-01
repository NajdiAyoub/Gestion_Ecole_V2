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
            <label>{{ __('text.Sexe.lbl') }}</label>
            <input type="text" name="sexe" class="form-control">
            <label>{{ __('text.Tel.lbl') }}</label>
            <input type="text" name="tel" class="form-control">
            <label>{{ __('text.Email.lbl') }}</label>
            <input type="text" name="email" class="form-control">

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