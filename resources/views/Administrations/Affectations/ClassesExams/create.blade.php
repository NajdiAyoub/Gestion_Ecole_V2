
@extends('layouts.master')
@section('title')

@endsection

@section('css')

@endsection
@section('content')

<!-- start add Modal -->
{{ Breadcrumbs::render('admin.affectations.classesexams.add') }}


        <div class="modal-header">
          <h5 style= "font-style:italic ;color: #007bff;" class="modal-title" id="exampleModalLabel">{{__('text.ClassesExams.add')}}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          </button>


        </div>
      <form action="{{ action('ClassesExamsController@store') }}" method="POST">

        {{ csrf_field() }}
        <div class="modal-body">

            <div class="form-group"> 
            <label>{{ __('text.Profs.lbl') }}</label></br>

            <select style="border: 2px solid lightgray; width: 200px;HEIGHT: 35px;" name="profs_id">
              <option></option>
              @foreach ($profs as $item)
          <option value="{{$item->id}}">{{$item->prenom}}</option>
              @endforeach
          </select></br>
          <label>{{ __('text.Matieres.lbl') }}</label></br>

          <select style="border: 2px solid lightgray; width: 200px;HEIGHT: 35px;" name="matieres_id">
            <option></option>
            @foreach ($Matiere as $item)
        <option value="{{$item->id}}">{{$item->libelle}}</option>
            @endforeach
        </select></br>
        <label>{{ __('text.Classes.lbl') }}</label></br>

        <select style="border: 2px solid lightgray; width: 200px;HEIGHT: 35px;" name="classes_id">
          <option></option>
          @foreach ($Classe as $item)
      <option value="{{$item->id}}">{{$item->libelle}}</option>
          @endforeach
      </select></br>

      <label>{{ __('text.Salles.lbl') }}</label></br>

        <select style="border: 2px solid lightgray; width: 200px;HEIGHT: 35px;" name="salles_id">
          <option></option>
          @foreach ($salles as $item)
      <option value="{{$item->id}}">{{$item->libelle}}</option>
          @endforeach
      </select></br>
      <label>{{ __('text.Niveaux.lbl') }}</label></br>

      <select style="border: 2px solid lightgray; width: 200px;HEIGHT: 35px;" name="niveaux_id">
        <option></option>
        @foreach ($niveaux as $item)
    <option value="{{$item->id}}">{{$item->libelle}}</option>
        @endforeach
    </select></br>
    <label>{{ __('text.Semestres.lbl') }}</label></br>

      <select style="border: 2px solid lightgray; width: 200px;HEIGHT: 35px;" name="semestres_id">
        <option></option>
        @foreach ($Semestre as $item)
    <option value="{{$item->id}}">{{$item->libelle}}</option>
        @endforeach
    </select></br>

            </div>
            <button type="submit" class="btn btn-primary">{{__('text.soumettre.btn')}}</button>
            <input type="button" class="btn btn-primary" value="{{__('text.revenir.btn')}}" onclick="history.back()">
          <input type="hidden" value="{{Session::token()}}" name="_token">
          <input type="hidden" name="p_id" id="p_id" value="">
      </div>
      </form>

    <!-- End add Modal -->

    @endsection
    @section('js')

    @endsection
