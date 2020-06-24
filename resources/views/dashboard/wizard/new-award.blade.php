<!--New Award Modal -->
<div class="modal fade" id="newaward" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Award Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="/awards">
          @csrf
          <div class="row">
            <div class="col-md-4">
              <label>Award Name:</label>
              <input type="text" class="form-control" name="name" required autofocus style="border-radius:0px;">
            </div>
            <div class="col-md-4">
             <label>Institution:</label>
             <input type="text" class="form-control" name="institution" required autofocus style="border-radius:0px;">
           </div>

           <div class="col-md-3">
             <label>Award/Qualification Date:</label>
             <div class="input-group date" data-provide="datepicker">
              <input type="date" name="award_date" class="form-control">
              <div class="input-group-addon">
                <span class="glyphicon glyphicon-th"></span>
              </div>
            </div>
          </div>
        </div>
        <br>
        <div class="row">

          <div class="col-md-12">
            <label>Description:</label>
            <textarea name="description" class="form-control ckeditor" id="award" required autofocus rows="3"style="border-radius:0px;"></textarea> 
          </div>
        </div>
        <br>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success">Save & Continue</button>
        </div>
      </form>
    </div>
  </div>
</div>
</div>