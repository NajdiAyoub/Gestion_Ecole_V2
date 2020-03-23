@extends('layouts.master')
@section('title')

@endsection

@section('css')

@endsection
@section('content')

<!-- start edit Modal -->
{{ Breadcrumbs::render('admin.parametre.anneesscolaire.edit',$data->id) }}


<div class="modal-header">
    <h5 style= "font-style:italic ;color: #007bff;" class="modal-title" id="editModalLabel" style="font-style:italic; ">{{__('text.Edit_AnneesScolaire.lbl')}}</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    </button>


</div>
<form action="{{ route('anneesscolaire.update', [$data->id]) }}" method="POST">

    @csrf
    @method('PUT')
    <div class="modal-body">

        <div class="form-group">
            <label>{{ __('text.Libelle.lbl') }}</label>
            <input type="text" name="libelle" id="libelle" value="{{ $data->libelle}}" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>

    </div>
</form>


<!-- End add Modal -->
@endsection
@section('js')

@endsection
