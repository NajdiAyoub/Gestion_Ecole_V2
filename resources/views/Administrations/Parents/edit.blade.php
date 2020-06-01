
@extends('layouts.master')
@section('title')

@endsection

@section('css')

@endsection
@section('content')

<!-- start edit Modal -->
{{ Breadcrumbs::render('admin.parametre.parents.edit',$data->id) }}


            <div class="modal-header">
                <h5 style= "font-style:italic ;color: #007bff;" class="modal-title" id="editModalLabel">{{__('text.Parents.edit')}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>


            </div>
            <form action="{{ route('parents.update',$data->id) }}" method="POST">

                @csrf
                @method('PUT')
                <div class="modal-body">

                    <div class="form-group">

                     

                        <label>{{__('text.Nom.lbl')}}</label>
                        <input type="text" name="nom" id="nom" value="{{ $data->nom}}" class="form-control">

                        <label>{{__('text.Prenom.lbl')}}</label>
                        <input type="text" name="prenom" id="prenom" value="{{ $data->prenom}}" class="form-control">

                        <label>{{__('text.CIN.lbl')}}</label>
                        <input type="text" name="cin" id="cin" value="{{ $data->cin}}" class="form-control">

                        <label>{{__('text.Adresse.lbl')}}</label>
                        <input type="text" name="adresse" id="adresse" value="{{ $data->adresse}}" class="form-control">

                        <label>{{__('text.Sexe.lbl')}}</label>
                        <input type="text" name="sexe" id="sexe" value="{{ $data->sexe}}" class="form-control">
                        

                        <label>{{__('text.Telephone.lbl')}}</label>
                        <input type="text" name="tel" id="tel" value="{{ $data->tel}}" class="form-control">
                        
                        <label>{{__('text.Email.lbl')}}</label>
                        <input type="text" name="email" id="email" value="{{ $data->email}}" class="form-control">
                        
                     
                    </div>
                    <button type="submit" class="btn btn-primary">{{__('text.Editer.btn')}}</button>
                    <input type="button" class="btn btn-primary" value={{__('text.revenir.btn')}} onclick="history.back()">


                </div>
        </form>


<!-- End add Modal -->
@endsection
@section('js')

@endsection
