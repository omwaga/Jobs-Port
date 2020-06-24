<!--New Work experience Modal -->
<div class="modal fade" id="newexperience" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Work Experience Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form method="POST" action="/experiences">
        @csrf
        <div class="row">
          <div class="col-md-6">
            <label>Employer:</label>
            <input type="text" class="form-control" name="employer" placeholder="Organization" required autofocus style="border-radius:0px;">
          </div>
          <div class="col-md-6">
            <label>Position:</label>
            <input type="text" class="form-control" name="position" placeholder="Job Position" required autofocus style="border-radius:0px;">
          </div>

          <div class="col-md-6">
            <label>Start Date:</label>
            <div class="input-group date" data-provide="datepicker">
              <input type="date" name="start_date" class="form-control">
              <div class="input-group-addon">
                <span class="glyphicon glyphicon-th"></span>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <label>End Date:</label>
            <div class="input-group date" data-provide="datepicker">
              <input type="date" name="end_date" class="form-control">
              <div class="input-group-addon">
                <span class="glyphicon glyphicon-th"></span>
              </div>
            </div>
            <label class="checkbox-inline">
              <input class="form-check-input" type="hidden" name="current_employer" value="" id="defaultCheck1">
              <input type="checkbox" name="current_employer" value="current employer">Current Employer
            </label>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <label>Achievements and Responsibilities:</label>
            <textarea name="roles" class="form-control ckeditor" id="duties" required autofocus rows="3"style="border-radius:0px;"></textarea>    
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