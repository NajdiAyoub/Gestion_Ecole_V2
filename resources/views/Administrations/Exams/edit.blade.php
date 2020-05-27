
@extends('layouts.master')
@section('title')

@endsection

@section('css')

@endsection
@section('content')

<!-- start edit Modal -->
{{ Breadcrumbs::render('admin.parametre.exams.edit',$data->id) }}



            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel" style="font-style:italic; color: #007bff; ">{{__('text.Exams.edit')}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>


            </div>
            <form action="{{ route('exams.update', [$data->id]) }}" method="POST">

                @csrf
                @method('PUT')
                <div class="modal-body">

                    <div class="form-group">
                        <label>{{__('text.libelle.lbl')}}</label>
                        <input type="text" name="libelle" id="libelle" value="{{ $data->libelle}}" class="form-control">
                    </div>
                  
                    <div class="form-group">
                        <label>{{__('text.Date_Exam.lbl')}}</label>
                        <input type="text" name="date_exam" id="date_exam" value="{{ $data->date_exam}}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>{{__('text.Heure_Exam.lbl')}}</label>
                        <input type="text" name="heure_exam" id="heure_exam" value="{{ $data->heure_exam}}" class="form-control">
                    </div>
                    <label>{{__('text.AnneesScolaire.lbl')}}</label></br>
                    <select style="border: 2px solid lightgray; width: 200px;HEIGHT: 35px;" name="anneesscolaire_id">
                        <option >--------------------------------------</option>
                        @foreach ($anneesscolaire as $item)
                    <option value="{{$item->id}}">{{$item->libelle}}</option>
                        @endforeach
                    </select></br>
                   
                    <label>{{__('text.Profs.lbl')}}</label></br>
                    <select style="border: 2px solid lightgray; width: 200px;HEIGHT: 35px;" name="profs_id">
                        <option >--------------------------------------</option>
                        @foreach ($profs as $item)
                    <option value="{{$item->id}}">{{$item->nom}}</option>
                        @endforeach
                    </select></br>

                    <label>{{__('text.Matieres.lbl')}}</label></br>
                    <select style="border: 2px solid lightgray; width: 200px;HEIGHT: 35px;" name="matieres_id">
                        <option >--------------------------------------</option>
                        @foreach ($matieres as $item)
                    <option value="{{$item->id}}">{{$item->libelle}}</option>
                        @endforeach
                    </select></br>

                    <label>{{__('text.Classes.lbl')}}</label></br>
                    <select style="border: 2px solid lightgray; width: 200px;HEIGHT: 35px;" name="classes_id">
                        <option >--------------------------------------</option>
                        @foreach ($classes as $item)
                    <option value="{{$item->id}}">{{$item->libelle}}</option>
                        @endforeach
                    </select></br>
                  </div>
                  <label>{{__('text.Salles.lbl')}}</label></br>
                  <select style="border: 2px solid lightgray; width: 200px;HEIGHT: 35px;" name="salles_id">
                      <option >--------------------------------------</option>
                      @foreach ($salles as $item)
                  <option value="{{$item->id}}">{{$item->libelle}}</option>
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
