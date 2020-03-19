@extends('layouts.master')
@section('title')


@endsection

@section('css')

@endsection

@section('content')

<div class="content-header" style="margin: auto;">


    <div class="content">
        <div class="container-fluid">
            <div class="row">

                <section class="content" style="margin:auto;">
                    <center>
                        <div class="row">
                            <div class="col-12">
                                <div class="card" style="background-color: #343a40; margin-bottom: 0px;">
                                    <div class="card-header"><strong><em>
                                                <h4 style="color: antiquewhite; margin-top: 8px;"> Listes Exams</h4>
                                            </em></strong>
                                        <div class="mt-4" style="float: right ; margin-top: 0px !important;">
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#exampleModal" style="margin-right: 15px;">
                                                Ajouter Exams
                                            </button>
                                        </div>


                                        <!-- End add Modal -->
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body" style="padding:0px;">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Libelle</th>
                                        <th>Niveaux</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>SM</td>
                                        <td>2eme annees</td>
                                        <td><i class="fas fa-trash-alt" style="margin-right: 90px;"></i><i
                                                class="fas fa-edit style=" margin-right:top;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>PC</td>
                                        <td>2eme annees</td>
                                        <td><i class="fas fa-trash-alt" style="margin-right: 90px;"></i><i
                                                class="fas fa-edit style=" margin-right:top;"></i></td>

                                    </tr>

                                    <tr>
                                        <td>SECO</td>
                                        <td>2eme annees</td>
                                        <td><i class="fas fa-trash-alt" style="margin-right: 90px;"></i><i
                                                class="fas fa-edit style=" margin-right:top;"></i></td>

                                    </tr>
                                    <tr>
                                        <td>SVT</td>
                                        <td>2eme annees</td>

                                        <td><i class="fas fa-trash-alt" style="margin-right: 90px;"></i><i
                                                class="fas fa-edit style=" margin:auto;"></i></td>

                                    </tr>

                                </tbody>

                            </table>
                        </div>
                    </center>
                    <!-- /.card-body -->
            </div>
          
            @endsection
            @section('js')

            @endsection
