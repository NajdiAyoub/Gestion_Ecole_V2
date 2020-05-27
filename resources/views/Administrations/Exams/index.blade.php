@extends('layouts.master')
@section('title')


@endsection

@section('css')

@endsection

@section('content')
{{ Breadcrumbs::render('admin.parametre.exams') }}



<div class="content">
    <div class="container-fluid">
        <div class="row">

<div class="content-header" style="margin: auto;">
    <!-- Button trigger modal -->

    
  
    <h4 style="font-style:italic;margin-left: -512px; margin-bottom: -29px; color: #007bff;">{{__('text.Exams.list')}}</h4>
                   
    <div><a class="'btn btn-success" style="padding: 6px;float:right; margin-right: -518px;"
              href="{{ route('exams.create') }}"> &nbsp; <i
                  class="right fas fa-plus-circle"> &nbsp;</i>{{__('text.Exams.add')}}</a>
                  <label  
                  " for="search">Search:</label>
                  <input style="margin-right: -273px; margin-top:5px"  type="search" id="search" name="search">
                </div>
  
         
</section>    
  </div>
</div>

                        <!-- /.card-header -->
                        <div class="card-body" style="padding:0px;">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>{{__('text.Libelle.lbl')}}</th>
                                        <th>{{__('text.Date_Exam.lbl')}}</th>
                                        <th>{{__('text.Heure_Exam.lbl')}}</th>
                                        <th>{{__('text.AnneesScolaire.lbl')}}</th>
                                        <th>{{__('text.Prof.lbl')}}</th>
                                        <th>{{__('text.Matiere.lbl')}}</th>
                                        <th>{{__('text.Classe.lbl')}}</th>
                                        <th>{{__('text.Salle.lbl')}}</th>

                                        <th style="width:100px;">{{__('text.Actions.lbl')}}</th>
                                   
                                @foreach ($datas as $item)
                                <tr>
                                    <td>{{$item->libelle}}</td>
                                    <td>{{$item->date_exam}}</td>
                                    <td>{{$item->heure_exam}}</td>
                                    <td>{{$item->anneesscolaire}}</td>
                                    <td>{{$item->profs}}</td>
                                    <td>{{$item->matieres}}</td>
                                    <td>{{$item->classes}}</td>
                                    <td>{{$item->salles}}</td>



                                    <td>
                                        <form method="delete" action="{{route('exams.destroy', $item->id)}}">
                                            @csrf
                                            @method('DELETE')
                                            <div class='btn-group'>
                                                <a href="{{ route('exams.edit', $item->id) }}"
                                                    class='btn btn-primary pull-right'><i class="fas fa-edit"></i></a>
                                                <button type="submit" onclick="return myFunction();" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach


                            </tbody>

                        </table>
                        {{ $datas->links() }}

                    </div>
                </center>
                <!-- /.card-body -->
        </div>
        <script>
            function myFunction() {
                if(!confirm("Are You Sure to delete this"))
                event.preventDefault();
            }
           </script>



        @endsection
        @section('js')

        @endsection
