<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
               <form method="post" action="{{route('rjobs')}}">
     	            @csrf
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Industry</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     	    <div class="row">
     	        <div class="col-md-12">
     	            <label>Select Industry</label>
     	            <select data-live-search="true" name="industry" class="form-control" data-live-search-style="startsWith" class="selectpicker">
     	                <option>Select Industry</option>
     	                @foreach($categories as $category)
     	                <option value="{{$category->id}}">{{$category->name}}</option>
     	                @endforeach
     	            </select>
     	        </div>
     	    </div>
     	 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
       </form>
    </div>
  </div>
</div>