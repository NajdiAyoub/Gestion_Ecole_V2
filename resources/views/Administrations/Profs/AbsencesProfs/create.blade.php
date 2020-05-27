
@extends('layouts.master')
@section('title')

@endsection

@section('css')

@endsection
@section('content')

<!-- start add Modal -->
{{ Breadcrumbs::render('admin.prof.absences.add') }}


        <div class="modal-header">
          <h5 style= "font-style:italic ;color: #007bff;" class="modal-title" id="exampleModalLabel">{{__('text.AbsencesProfs.add')}}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          </button>


        </div>
      <form action="{{ action('AbsencesProfsController@store') }}" method="POST">

        {{ csrf_field() }}
        <div class="modal-body">

            <div class="form-group">
              <label>{{__('text.Date_Absences.lbl')}}</label>
              <input type="date" name="date_absences" class="form-control" >
              <label>{{__('text.Seance.lbl')}}</label>
              <input type="text" name="seance" class="form-control" >
              <label>{{ __('text.Prof.lbl') }}</label></br>
            <select style="margin-top: 30px;width: 200px;HEIGHT: 35px;" name="profs_id">
                <option >--------------------------------------</option>
                @foreach ($profs as $item)
            <option value="{{$item->id}}">{{$item->nom}}</option></br>
                @endforeach
            </select></br>
              <label>{{__('text.Justifie.lbl')}}</label></br>
              <input type="text" name="justifie" class="form-control" >
              <label>{{__('text.Attachements.lbl')}}</label>
              <input type="file" name="attachements" class="form-control" >
              <label>{{__('text.Remarque.lbl')}}</label>
              <input type="text" name="remarque" class="form-control" > 
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <input type="button" class="btn btn-primary" value="Go back!" onclick="history.back()">
          <input type="hidden" value="{{Session::token()}}" name="_token">
          <input type="hidden" name="p_id" id="p_id" value="">
      </div>
      </form>

    <!-- End add Modal -->

    @endsection
    @section('js')

    @endsection
