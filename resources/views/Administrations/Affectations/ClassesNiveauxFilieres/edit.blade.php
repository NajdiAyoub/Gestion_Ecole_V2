
@extends('layouts.master')
@section('title')

@endsection

@section('css')

@endsection
@section('content')

<!-- start edit Modal -->
{{ Breadcrumbs::render('admin.affectations.classesniveauxfilieres.edit',$data->id) }}



            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel" style="font-style:italic; color: #007bff; ">{{__('text.ClassesNiveauxFilieres.edit')}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>


            </div>
            <form action="{{ route('classesniveauxfilieres.update', [$data->id]) }}" method="POST">

                @csrf
                @method('PUT')
                <div class="modal-body">

                  
                    <label>{{__('text.AnneesScolaire.lbl')}}</label></br>
                    <select style="border: 2px solid lightgray; width: 1068px;HEIGHT: 40px;" name="anneesscolaire_id">
                        <option></option>
                        @foreach ($anneesscolaire as $item)
                    <option value="{{$item->id}}" @if ($data->niveaux_id==$item->id) selected 
                        
                        
                        @endif >{{$item->libelle}}</option>
                        @endforeach
                    </select></br>
                   
                    <label>{{__('text.Profs.lbl')}}</label></br>
                    <select style="border: 2px solid lightgray; width: 1068px;HEIGHT: 40px;" name="profs_id">
                        <option></option>
                        @foreach ($profs as $item)
                    <option value="{{$item->id}}"  @if ($data->profs_id==$item->id) selected 
                        
                        
                        @endif>{{$item->nom}}</option>
                        @endforeach
                    </select></br>

                    <label>{{__('text.Matieres.lbl')}}</label></br>
                    <select style="border: 2px solid lightgray; width: 1068px;HEIGHT: 40px;" name="matieres_id">
                        <option></option>
                        @foreach ($matieres as $item)
                    <option value="{{$item->id}}" @if ($data->matieres_id==$item->id) selected 
                        
                        
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
                  </div>

                  <label style="marging-left: 18px;">{{__('text.Filieres.lbl')}}</label></br>
                  <select style="border: 2px solid lightgray; margin-left:18px; width: 1068px;HEIGHT: 40px;" name="filieres_id">
                      <option></option>
                      @foreach ($filieres as $item)
                  <option value="{{$item->id}}"  @if ($data->filieres_id==$item->id) selected 
                        
                        
                    @endif>{{$item->libelle}}</option>
                      @endforeach
                  </select></br>
                
                  <label>{{__('text.Salles.lbl')}}</label></br>
                  <select style="border: 2px solid lightgray; margin-left:18px; width: 1068px;HEIGHT: 40px;" name="semestres_id">
                      <option></option>
                      @foreach ($semestres as $item)
                  <option value="{{$item->id}}" @if ($data->semestres_id==$item->id) selected 
                        
                        
                    @endif>{{$item->libelle}}</option>
                      @endforeach
                  </select></br>
                    <button style="margin-left:16px ;" type="submit" class="btn btn-primary">{{__('text.Editer.btn')}}</button>
                    <input type="button" class="btn btn-primary" value="{{__('text.revenir.btn')}}" onclick="history.back()">


                </div>
        </form>


<!-- End add Modal -->
@endsection
@section('js')

@endsection
