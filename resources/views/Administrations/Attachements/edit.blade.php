
@extends('layouts.master')
@section('title')

@endsection

@section('css')

@endsection
@section('content')

<!-- start edit Modal -->
{{ Breadcrumbs::render('admin.parametre.attachements.edit',$data->id) }}


            <div class="modal-header">
                <h5 style= "font-style:italic ;color: #007bff;" class="modal-title" id="editModalLabel">{{__('text.Attachements.edit')}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>


            </div>
            <form action="{{ route('attachements.update',$data->id) }}" method="POST">

                @csrf
                @method('PUT')
                <div class="modal-body">

                    <div class="form-group">

                     

                        <label>{{__('text.NomFichier.lbl')}}</label>
                        <input type="text" name="filename" id="filename" value="{{ $data->filename}}" class="form-control">

                        <label>{{__('text.Type.lbl')}}</label>
                        <input type="text" name="type" id="type" value="{{ $data->type}}" class="form-control">

                        <label>{{__('text.Date_Attach.lbl')}}</label>
                        <input type="text" name="date_attach" id="date_attach" value="{{ $data->date_attach}}" class="form-control">

                      
                    
                    <button type="submit" class="btn btn-primary">{{__('text.Editer.btn')}}</button>
                    <input type="button" class="btn btn-primary" value={{__('text.revenir.btn')}} onclick="history.back()">


                </div>
        </form>


<!-- End add Modal -->
@endsection
@section('js')

@endsection
