
@extends('layouts.master')
@section('title')

@endsection

@section('css')

@endsection
@section('content')
{{ Breadcrumbs::render('admin.parametre.salles.edit',$data->id) }}


<!-- start edit Modal -->


            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Editer Salles</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>


            </div>
            <form action="{{ route('listessalles.update', $datas->id) }}" method="POST">

                @csrf
                @method('PUT')
                <div class="modal-body">

                    <div class="form-group">
                        <label>libelle</label>
                        <input type="text" name="libelle" id="libelle" value="{{ $datas->libelle}}" class="form-control">
                        <label>libelle</label>
                        <input type="text" name="type_salle" id="type_salle" value="{{ $datas->type_salle}}" class="form-control">

                        <label>nombre_place</label>
                        <input type="text" name="nombre_place" id="nombre_place" value="{{ $datas->nombre_place}}" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Edit</button>

                </div>
        </form>


<!-- End add Modal -->
@endsection
@section('js')

@endsection
