<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     <form method="post" action="{{route('interests.store')}}">
      @csrf
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12">
            <label>Add Category</label>
            <select name="interests" class="form-control">
              <option>Select Category</option>
              @foreach($categories as $category)
              <option value="{{$category->id}}">{{$category->jobcategories}}</option>
              @endforeach
            </select>
          </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn text-white" style="background-color:#070A53;">Add Category</button>
      </div>
    </form>
  </div>
</div>
</div>