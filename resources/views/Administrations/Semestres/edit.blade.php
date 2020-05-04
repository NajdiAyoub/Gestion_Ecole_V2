@extends('layouts.master')
@section('title')

@endsection

@section('css')

@endsection
@section('content')
{{ Breadcrumbs::render('admin.parametre.semestres.edit',$data->id) }}


<!-- start edit Modal -->


<div class="modal-header">
    <h5 style= "font-style:italic ;color: #007bff;" class="modal-title" id="editModalLabel" style="font-style:italic; ">{{__('text.Semestres.edit')}}</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    </button>


</div>

<form action="{{ route('semestres.update', [$data->id]) }}" method="POST">

    @csrf
    @method('PUT')
    <div class="modal-body">

        <div class="form-group">
            <label>{{ __('text.Libelle.lbl') }}</label>
            <input type="text" name="libelle" id="libelle" value="{{ $data->libelle}}" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">{{__('text.Editer.btn')}}</button>
        <input type="button" class="btn btn-primary" value="{{__('text.revenir.btn')}}" onclick="history.back()">


    </div>
</form>


<!-- End add Modal -->
@endsection
@section('js')

@endsection
