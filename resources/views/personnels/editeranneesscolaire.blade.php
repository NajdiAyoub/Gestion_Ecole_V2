<!-- start edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editModalLabel">Editer Annees Scolaire</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
         
         
        </div>
      <form action="{{ action('AnneesScolaireController@update',$id ?? '') }}" method="POST">
   
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="modal-body">
          
            <div class="form-group">
              <label>libelle</label>
            <input type="text" name="libelle" id="libelle"  class="form-control" >
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
          <!-- <input type="hidden" value="{{Session::token()}}" name="_token">-->
          
        </div>
        </div>
      </form>
      </div>
  </div>
  
  <!-- End add Modal -->