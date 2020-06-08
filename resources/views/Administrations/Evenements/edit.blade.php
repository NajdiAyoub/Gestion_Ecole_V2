
@extends('layouts.master')
@section('title')

@endsection

@section('css')

@endsection
@section('content')

<!-- start edit Modal -->
{{ Breadcrumbs::render('admin.parametre.evenements.edit',$data->id) }}



            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel" style="font-style:italic; color: #007bff; ">{{__('text.Evenements.edit')}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>


            </div>
            <form action="{{ route('evenements.update', [$data->id]) }}" method="POST">

                @csrf
                @method('PUT')
                <div class="modal-body">

                    <div class="form-group">
                        <label>{{__('text.libelle.lbl')}}</label>
                        <input type="text" name="libelle" id="libelle" value="{{ $data->libelle}}" class="form-control">
                    </div>
                  
                    <div class="form-group">
                        <label>{{__('text.Date_Evenements.lbl')}}</label>
                        <input type="text" name="date_evenements" id="date_evenements" value="{{ $data->date_evenements}}" class="form-control">
                    </div>

                   
                    <label>{{__('text.Classes.lbl')}}</label></br>
                    <select style="border: 2px solid lightgray; width: 200px;HEIGHT: 35px;" name="classes_id">
                        <option ></option>
                        @foreach ($classes as $item)
                    <option value="{{$item->id}}"  @if ($data->classes_id==$item->id) selected 
                        
                        
                        @endif>{{$item->libelle}}</option>
                        @endforeach
                    </select></br>
                   
                    <label>{{__('text.Profs.lbl')}}</label></br>
                    <select style="border: 2px solid lightgray; width: 200px;HEIGHT: 35px;" name="profs_id">
                        <option></option>
                        @foreach ($profs as $item)
                    <option value="{{$item->id}}" @if ($data->profs_id==$item->id) selected 
                        
                        
                        @endif>{{$item->nom}}</option>
                        @endforeach
            
                    </select></br>
            
                    <label>{{__('text.Details.lbl')}}</label>
                    <input type="textarea" name="details" id="details" value="{{ $data->details}}" class="form-control">
            
                </div>
                    <button style="margin-left:16px ;" type="submit" class="btn btn-primary">{{__('text.Editer.btn')}}</button>
                    <input type="button" class="btn btn-primary" value="{{__('text.revenir.btn')}}" onclick="history.back()">


                </div>
        </form>


<!-- End add Modal -->
@endsection
@section('js')

@endsection
