<div class="modal fade" id="poolname" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <form action="{{route('newpool')}}" method="POST">
     @csrf
      <div class="modal-header bg-primary text-white">
        <h6 class="modal-title text-white" id="exampleModalLabel">Add talent pool?</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label>Talent Pool Name:</label>
              <input class="form-control"  type="text" name="pool_name" required />
             </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary btn-sm">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>