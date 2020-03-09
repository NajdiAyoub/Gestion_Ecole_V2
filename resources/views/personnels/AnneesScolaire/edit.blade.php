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
      
    <form action="{{ route('anneesscolaire.update', ['anneesscolaire' => $anneesscolaire->p_id]) }}" method="POST">
       
   
        @csrf
        @method('PUT')
        <div class="modal-body">              
         
            <div class="form-group">
              <label>libelle</label>
            <input type="text" name="libelle" id="libelle" value="{{ $anneesscolaire->libelle}}"  class="form-control" >
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="p_id" libelle="p_id" value="">
           <input type="hidden" value="{{Session::token()}}" name="_token">
          
        </div>
        </div>
      </form>
      </div>
  </div>
  
  <!-- End add Modal -->