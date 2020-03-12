
@extends('layouts.master')
@section('title')
    
@endsection

@section('css')
    
@endsection
@section('content')

<!-- start edit Modal -->

       
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Editer Niveaux</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>


            </div>
            <form action="{{ route('listeniveaux.update',$datas->id) }}" method="POST">

                @csrf
                @method('PUT')
                <div class="modal-body">

                    <div class="form-group">
                        <label>libelle</label>
                        <input type="text" name="libelle" id="libelle" value="{{ $datas->libelle}}" class="form-control">
                   
                        <label>description</label>
                        <input type="text" name="libelle" id="libelle" value="{{ $datas->description}}" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Edit</button>

                </div>
        </form>
   

<!-- End add Modal -->
@endsection
@section('js')
    
@endsection