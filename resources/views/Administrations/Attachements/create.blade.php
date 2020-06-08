@extends('layouts.master')
@section('title')

@endsection

@section('css')

@endsection
@section('content')

<!-- start add Modal -->
{{ Breadcrumbs::render('admin.parametre.attachements.add') }}

<div class="modal-header">
    <h5 style= "font-style:italic ;color: #007bff;"class="modal-title" id="exampleModalLabel">{{__('text.Attachements.add')}} </h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    </button>


</div>

<form action="{{ action('AttachementsController@store') }}" method="POST">

    {{ csrf_field() }}
    <div class="modal-body">
        <div class="form-group">
            <label>{{ __('text.FileName.lbl') }}</label>
            <input type="text" name="filename" class="form-control">
           
            <label>{{__('text.Type.lbl')}}</label></br>
            <select style="border: 2px solid lightgray; width: 1068px;HEIGHT: 40px;" name="type">
              <option></option>
              @foreach ($attachement as $item)
          <option value="{{$item->type}}">{{$item->type}}</option>
              @endforeach
          </select>              
            <label>{{ __('text.Date_Attach.lbl') }}</label>
            <input type="date" name="date_attach" class="form-control">
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
