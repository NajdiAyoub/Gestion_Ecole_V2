
@extends('layouts.master')
@section('title')

@endsection

@section('css')

@endsection
@section('content')
{{ Breadcrumbs::render('admin.parametre.matieres.edit',$data->id) }}


<!-- start edit Modal -->



            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel" style="font-style:italic; ">Editer Matieres</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>


            </div>
            <form action="{{ route('matieres.update', [$data->id]) }}" method="POST">

                @csrf
                @method('PUT')
                <div class="modal-body">

                    <div class="form-group">
                        <label>libelle</label>
                        <input type="text" name="libelle" id="libelle" value="{{ $data->libelle}}" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Edit</button>

                </div>
        </form>


<!-- End add Modal -->
@endsection
@section('js')

@endsection
