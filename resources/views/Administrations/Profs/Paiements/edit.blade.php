
@extends('layouts.master')
@section('title')

@endsection

@section('css')

@endsection
@section('content')

<!-- start edit Modal -->
{{ Breadcrumbs::render('admin.prof.paiements.edit',$data->id) }}


            <div class="modal-header">
                <h5 style= "font-style:italic ;color: #007bff;" class="modal-title" id="editModalLabel">{{__('text.PaiementsProfs.edit')}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>


            </div>
            <form action="{{ route('paiementsprofs.update',$data->id) }}" method="POST">

                @csrf
                @method('PUT')
                <div class="modal-body">

                    <div class="form-group">

                        <label>{{__('text.Profs.lbl')}}</label></br>
                    <select style="border: 2px solid lightgray; width: 200px;HEIGHT: 35px;" name="profs_id">
                        <option >--------------------------------------</option>
                        @foreach ($profs as $item)
                    <option value="{{$item->id}}">{{$item->nom}}</option>
                        @endforeach
                    </select></br>

                        <label>{{__('text.Nombre_Heure.lbl')}}</label>
                        <input type="text" name="nombre_heure" id="nombre_heure" value="{{ $data->nombre_heure}}" class="form-control">

                        <label>{{__('text.Montant_Par_Heure.lbl')}}</label>
                        <input type="text" name="montant_par_heure" id="montant_par_heure" value="{{ $data->montant_par_heure}}" class="form-control">

                        <label>{{__('text.Date_Paiements.lbl')}}</label>
                        <input type="text" name="date_paiements" id="date_paiements" value="{{ $data->date_paiements}}" class="form-control">

                        <label>{{__('text.Type_Paiements.lbl')}}</label>
                        <input type="text" name="type_paiements" id="type_paiements" value="{{ $data->type_paiements}}" class="form-control">
                        
                        <label>{{__('text.Salaire.lbl')}}</label>
                        <input type="text" name="salaire" id="salaire" value="{{ $data->salaire}}" class="form-control">

                        <label>{{__('text.Somme.lbl')}}</label>
                        <input type="text" name="somme" id="tel" value="{{ $data->somme}}" class="form-control">

                    </div>
                    <button type="submit" class="btn btn-primary">Edit</button>
                    <input type="button" class="btn btn-primary" value="Go back!" onclick="history.back()">


                </div>
        </form>


<!-- End add Modal -->
@endsection
@section('js')

@endsection
