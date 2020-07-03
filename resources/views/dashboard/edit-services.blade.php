
<!--Edit personal information Modal -->
<div class="modal fade" id="services" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Basic Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="#">
         @csrf
         @method('PATCH')
          <div class="row">
            <div class="col-md-6">
              <label>Title:</label>
              <input type="text" class="form-control" value="{{old('title')}}" name="title" required autofocus>
            </div>
            <div class="col-md-12">
              <label>Description:</label>
              <textarea class="form-control ckeditor" name="description" required autofocus></textarea>
            </div>

            <div class="col-md-6">
              <label>Skills and Expertise:</label>
              <select name="skills" class="form-control" multiple data-live-search="true">
                @foreach($skills as $skill)
                <option value="{{$skill->id}}">{{$skill->name}}</option>
                @endforeach
              </select>
            </div>

            <div class="col-md-6">
              <label>Rate/Hour:</label>
              <input type="text" class="form-control" name="rate" value="{{old('rate')}}">
            </div>

            <div class="col-md-6">
              <label>Minimum Budget:</label>
              <input type="text" class="form-control" name="minimum_budget" value="{{old('minimum_budget')}}">
            </div>

            <div class="col-md-6">
              <label>Category:</label>
              <select name="category" class="form-control" required autofocus value="{{old('category')}}">
                <option value="">Select Cateory</option>
                @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->jobcategories}}</option>
                @endforeach
              </select>
            </div>
          </div>
          <br>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success">Update</button>

        </div>
      </form>
    </div>
  </div>
</div>
</div>