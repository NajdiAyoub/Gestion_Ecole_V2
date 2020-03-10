@extends('layouts.master')
@section('title')


@endsection

@section('css')

@endsection

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Annees Scolaire</a></li>
                    <li class="breadcrumb-item active">Listes Annees Scolaire</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <section class="content" style="margin:auto;">
                    <div class="row">
                        <div class="col-12">
                                <div class="card-header">
        <h4 style="color: blue; margin-top: 8px; margin-bottom:-24px ; font-style:italic; margin-left: -10px;"> {{ __('text.annees_scolaire.list.lbl')}} </h4>
                                   
                                    <div class="mt-4" style="float: right ; margin-top: 0px !important;">
                                        <!-- Button trigger modal -->
                                        <i class="right fas fa-plus-circle"></i>
                                        <a class="'btn btn-success"href="{{ route('anneesscolaire.create') }}">{{__('text.Ajouter.btn')}}</a>
                                </div>
                                </div>
                                </div>
                                </div> 
                    <!-- /.card-header -->
                    <div class="card-body" style="padding:0px;">
                        <table id="example2" style="width: 703px;"class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>{{__('text.libelle.lbl')}}</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($datas as $item)
                                <tr>
                                    <td>{{$item['libelle']}}</td>
                                    <td>
                                        <form method="delete" action="{{route('anneesscolaire.destroy', $item->id)}}">
                                            @csrf
                                            @method('DELETE')
                                            <div class='btn-group'>
                                                <a href="{{ route('anneesscolaire.edit', [$item->id]) }}"
                                                    class='btn btn-primary pull-right'>{{__('text.Edit.btn')}}</a>
                                                <button type="submit" class="btn btn-danger">{{__('text.Delete.btn')}}</button>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach


                            </tbody>

                        </table>
                    </div>
                <!-- /.card-body -->
        </div>
       @endsection
        @section('js')

        @endsection