<!-- Large Modal -->
<div  id="modal-large" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">New Category</h4>
      </div>
      <div class="modal-body">
        <form class="js-validation-bootstrap form-horizontal" action="{{route('new-express-category')}}" method="post">
         @csrf
         <div class="form-group">
          <label class="col-md-3 control-label">Category Name: <span class="text-danger">*</span></label>
          <div class="col-md-9">
            <input class="form-control" type="text" name="name" value="{{old('name')}}" placeholder="Category Name" required="">
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-8 col-md-offset-3">
            <button class="btn  btn-primary" type="submit">Add</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
      </form>
    </div>
    <div class="modal-footer">
    </div>
  </div>
  
</div>
</div>
<!-- END Large Modal -->