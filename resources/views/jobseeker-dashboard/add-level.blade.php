<div class="modal fade" id="addLevel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     <form method="post" action="{{route('joblevels.store')}}">
      @csrf
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Level</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12">
            <label>Add Level</label>
            <select name="level" class="form-control">
              <option>Select Level</option>
              @foreach($levels as $level)
              <option value="{{$level->id}}">{{$level->name}}</option>
              @endforeach
            </select>
          </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn text-white" style="background-color:#070A53;">Add Level</button>
      </div>
    </form>
  </div>
</div>
</div>