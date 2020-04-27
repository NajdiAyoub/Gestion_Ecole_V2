
@extends('layouts.master')
@section('title')

@endsection

@section('css')

@endsection
@section('content')

<!-- start edit Modal -->
{{ Breadcrumbs::render('admin.prof.profs.edit',$data->id) }}


            <div class="modal-header">
                <h5 style= "font-style:italic ;color: #007bff;" class="modal-title" id="editModalLabel">{{__('text.Profs.edit')}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>


            </div>
            <form action="{{ route('profs.update',$data->id) }}" method="POST">

                @csrf
                @method('PUT')
                <div class="modal-body">

                    <div class="form-group">
                        <label>{{__('text.Nom.lbl')}}</label>
                        <input type="text" name="nom" id="nom" value="{{ $data->nom}}" class="form-control">

                        <label>{{__('text.Prenom.lbl')}}</label>
                        <input type="text" name="prenom" id="prenom" value="{{ $data->prenom}}" class="form-control">

                        <label>{{__('text.Date_Naissance.lbl')}}</label>
                        <input type="text" name="date_naissance" id="date_naissance" value="{{ $data->date_naissance}}" class="form-control">

                        <label>{{__('text.Tel.lbl')}}</label>
                        <input type="text" name="tel" id="tel" value="{{ $data->tel}}" class="form-control">
                        
                        <label>{{__('text.Email.lbl')}}</label>
                        <input type="text" name="tel" id="tel" value="{{ $data->email}}" class="form-control">

                        <label>{{__('text.Type_Contrat.lbl')}}</label>
                        <input type="text" name="type_contrat" id="tel" value="{{ $data->type_contrat}}" class="form-control">

                    </div>
                    <button type="submit" class="btn btn-primary">Edit</button>
                    <input type="button" class="btn btn-primary" value="Go back!" onclick="history.back()">


                </div>
        </form>


<!-- End add Modal -->
@endsection
@section('js')

@endsection
