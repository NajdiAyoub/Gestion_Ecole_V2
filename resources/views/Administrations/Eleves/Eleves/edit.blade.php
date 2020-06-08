
@extends('layouts.master')
@section('title')

@endsection

@section('css')

@endsection
@section('content')

<!-- start edit Modal -->
{{ Breadcrumbs::render('admin.eleves.eleves.edit',$data->id) }}


            <div class="modal-header">
                <h5 style= "font-style:italic ;color: #007bff;" class="modal-title" id="editModalLabel">{{__('text.Eleves.edit')}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>


            </div>
            <form action="{{ route('eleves.update',$data->id) }}" method="POST">

                @csrf
                @method('PUT')
                <div class="modal-body">

                    <div class="form-group">

                     

                        <label>{{__('text.Nom.lbl')}}</label>
                        <input type="text" name="nom" id="nom" value="{{ $data->nom}}" class="form-control">

                        <label>{{__('text.Prenom.lbl')}}</label>
                        <input type="text" name="prenom" id="prenom" value="{{ $data->prenom}}" class="form-control">

                        <label>{{__('text.Date_Naissance.lbl')}}</label>
                        <input type="date" name="date_naissance" id="date_naissance" value="{{ $data->date_naissance}}" class="form-control">
                       
                        <label>{{__('text.Adresse.lbl')}}</label>
                        <input type="text" name="adresse" id="adresse" value="{{ $data->adresse}}" class="form-control">

                        
                        <label>{{__('text.Email.lbl')}}</label>
                        <input type="text" name="email" id="email" value="{{ $data->email}}" class="form-control">

                        <label>{{__('text.Niveaux.lbl')}}</label></br>
                        <select style="border: 2px solid lightgray; width: 1068px;HEIGHT: 40px;" name="niveaux_id">
                            <option></option>
                            @foreach ($niveaux as $item)
                        <option value="{{$item->id}}" @if ($data->niveaux_id==$item->id) selected 
                              
                              
                          @endif>{{$item->libelle}}</option>
                            @endforeach
                        </select></br>
                        
                        <label>{{__('text.Filieres.lbl')}}</label></br>
                        <select style="border: 2px solid lightgray; width: 1068px;HEIGHT: 40px;" name="filieres_id">
                            <option></option>
                            @foreach ($filieres as $item)
                        <option value="{{$item->id}}" @if ($data->filieres_id==$item->id) selected 
                              
                              
                          @endif>{{$item->libelle}}</option>
                            @endforeach
                        </select></br>


                        <label>{{__('text.Classes.lbl')}}</label></br>
                        <select style="border: 2px solid lightgray; width: 1068px;HEIGHT: 40px;" name="classes_id">
                            <option></option>
                            @foreach ($classes as $item)
                        <option value="{{$item->id}}" @if ($data->classes_id==$item->id) selected 
                                                   
                          @endif>{{$item->libelle}}</option>
                            @endforeach
                        </select></br>

                        <label>{{__('text.Image.lbl')}}</label>
                        <input type="file" name="image" id="type_contrat" value="{{ $data->image}}"  class="form-control">
                        
                        <label>{{__('text.Login.lbl')}}</label>
                        <input type="text" name="login" id="login" value="{{ $data->login}}" class="form-control">
                        
                        <label>{{__('text.Password.lbl')}}</label>
                        <input type="password" name="password" id="montant_par_Heure" value="{{ $data->password}}" class="form-control">
                        
                        


                    </div>
                    <button type="submit" class="btn btn-primary">{{__('text.Editer.btn')}}</button>
                    <input type="button" class="btn btn-primary" value={{__('text.revenir.btn')}} onclick="history.back()">


                </div>
        </form>


<!-- End add Modal -->
@endsection
@section('js')

@endsection
