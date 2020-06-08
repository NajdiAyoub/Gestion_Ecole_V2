
@extends('layouts.master')
@section('title')

@endsection

@section('css')

@endsection
@section('content')

<!-- start edit Modal -->
{{ Breadcrumbs::render('admin.eleves.paiements.edit',$data->id) }}


            <div class="modal-header">
                <h5 style= "font-style:italic ;color: #007bff;" class="modal-title" id="editModalLabel">{{__('text.PaiementsEleves.edit')}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>


            </div>
            <form action="{{ route('paiementseleves.update',$data->id) }}" method="POST">

                @csrf
                @method('PUT')
                <div class="modal-body">

                    <div class="form-group">

                        <label>{{__('text.Eleves.lbl')}}</label></br>
                    <select style="border: 2px solid lightgray; width: 1068px;HEIGHT: 40px;" name="eleves_id">
                        <option ></option>
                        @foreach ($eleves as $item)
                    <option value="{{$item->id}}" @if ($data->eleves_id==$item->id) selected 
                        
                        
                        @endif>{{$item->nom}}</option>
                        @endforeach
                    </select></br>

                    
                    <label>{{__('text.Parents.lbl')}}</label></br>
                    <select style="border: 2px solid lightgray; width: 1068px;HEIGHT: 40px;" name="parents_id">
                        <option ></option>
                        @foreach ($parents as $item)
                    <option value="{{$item->id}}" @if ($data->parents_id==$item->id) selected 
                        
                        
                        @endif>{{$item->nom}}</option>
                        @endforeach
                    </select></br>

                        <label>{{__('text.Date_Paiements.lbl')}}</label>
                        <input type="text" name="date_paiements" id="date_paiements" value="{{ $data->date_paiements}}" class="form-control">

                        <label>{{__('text.Type_Paiements.lbl')}}</label>
                        <input type="text" name="type_paiements" id="type_paiements" value="{{ $data->type_paiements}}" class="form-control">

                        <label>{{__('text.Somme_Paiements.lbl')}}</label>
                        <input type="text" name="somme_paiements" id="somme_paiements" value="{{ $data->somme_paiements}}" class="form-control">



                    </div>
                    <button type="submit" class="btn btn-primary">Edit</button>
                    <input type="button" class="btn btn-primary" value="Go back!" onclick="history.back()">


                </div>
        </form>


<!-- End add Modal -->
@endsection
@section('js')

@endsection
