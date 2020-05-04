
@extends('layouts.master')
@section('title')

@endsection

@section('css')

@endsection
@section('content')

{{ Breadcrumbs::render('admin.parametre.salles.edit',$datas->id) }}



<!-- start edit Modal -->


            <div class="modal-header">
                <h5 style= "font-style:italic ;color: #007bff;" class="modal-title" id="editModalLabel">Editer Salles</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>


            </div>
            <form action="{{ route('salles.update', $datas->id) }}" method="POST">

                @csrf
                @method('PUT')
                <div class="modal-body">

                    <div class="form-group">
                        <label>{{__('text.Libelle.lbl')}}</label>
                        <input type="text" name="libelle" id="libelle" value="{{ $datas->libelle}}" class="form-control">
                        <label>{{__('text.Type_Salle.lbl')}}</label>
                        <input type="text" name="type_salle" id="type_salle" value="{{ $datas->type_salle}}" class="form-control">

                        <label>{{__('text.Nombre_Place.lbl')}}</label>
                        <input type="text" name="nombre_place" id="nombre_place" value="{{ $datas->nombre_place}}" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">{{__('text.Editer.btn')}}</button>
                    <input type="button" class="btn btn-primary" value="{{__('text.revenir.btn')}}" onclick="history.back()">


                </div>
        </form>


<!-- End add Modal -->
@endsection
@section('js')

@endsection
