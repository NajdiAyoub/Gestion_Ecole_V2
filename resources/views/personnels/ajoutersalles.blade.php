<!-- start add Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ajouter Salles</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
         
  
        </div>
      <form action="{{ action('SallesController@store') }}" method="POST">
  
        {{ csrf_field() }}
        <div class="modal-body">
          
            <div class="form-group">
              <label>libelle</label>
              <input type="text" name="libelle" class="form-control" >
              <label>Type_Salle</label>
              <input type="text" name="type_salle" class="form-control" >
              <label>nombre_place</label>
              <input type="text" name="nombre_place" class="form-control" >

            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <input type="hidden" value="{{Session::token()}}" name="_token">
          
        </div>
        </div>
      </form>
      </div>
    </div>
  </div>
  
  <!-- End add Modal -->