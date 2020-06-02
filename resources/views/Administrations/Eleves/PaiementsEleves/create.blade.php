
@extends('layouts.master')
@section('title')

@endsection

@section('css')

@endsection
@section('content')

<!-- start add Modal -->
{{ Breadcrumbs::render('admin.eleves.paiements.add') }}


        <div class="modal-header">
          <h5 style= "font-style:italic ;color: #007bff;" class="modal-title" id="exampleModalLabel">{{__('text.PaiementsEleves.add')}}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          </button>


        </div>
      <form action="{{ action('PaiementsElevesController@store') }}" method="POST">

        {{ csrf_field() }}
        <div class="modal-body">

            <div class="form-group">

              <label>{{ __('text.Eleves.lbl') }}</label></br>
              <select style="border: 2px solid lightgray; width: 200px;HEIGHT: 35px;" name="eleves_id">
                <option></option>
                @foreach ($eleves as $item)
            <option value="{{$item->id}}">{{$item->prenom}}</option>
                @endforeach
            </select></br>

            <label>{{ __('text.Parents.lbl') }}</label></br>
            <select style="border: 2px solid lightgray; width: 200px;HEIGHT: 35px;" name="parents_id">
              <option></option>
              @foreach ($parents as $item)
          <option value="{{$item->id}}">{{$item->prenom}}</option>
              @endforeach
          </select></br>
              <label>{{__('text.Date_Paiements.lbl')}}</label>
              <input type="date" name="date_paiements" class="form-control" >
              <label>{{__('text.Type_Paiements.lbl')}}</label>
              <input type="text" name="type_paiements" class="form-control" >
              <label>{{__('text.Somme_Paiements.lbl')}}</label>
              <input type="text" name="somme_paiements" class="form-control" >
              
              
              
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
