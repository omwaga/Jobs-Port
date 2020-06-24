<!--New Education Details Modal -->
<div class="modal fade" id="neweducation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Education Details </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="/education">
          @csrf
          <div class="row">
            <div class="col-md-4">
              <label>Institution Name:</label>
              <input type="text" class="form-control" name="institution" required autofocus style="border-radius:0px;">
            </div>
            <div class="col-md-4">
             <label>Name of Course Studied:</label>
             <input type="text" class="form-control" name="qualification" required autofocus style="border-radius:0px;">
           </div>

           <div class="col-md-4">
            <label>Attained Score:</label>
            <input type="text" class="form-control" name="score" required autofocus style="border-radius:0px;">
          </div>

          <div class="col-md-4">
            <label>Education Level:</label>
            <select name="level" class="form-control" style="border-radius:0px;"required autofocus value="{{old('marital_status')}}">
             <option>Select Education Level</option>
             <option>Diploma</option>
             <option>Degree</option>
             <option>Masters</option>
           </select>
         </div>

         <div class="col-md-4">
           <label>Start Date:</label>
           <div class="input-group date" data-provide="datepicker">
            <input type="date" name="start_date" class="form-control">
            <div class="input-group-addon">
              <span class="glyphicon glyphicon-th"></span>
            </div>
          </div>
        </div>
        <div class="col-md-4">
         <label>Graduation Date:</label>
         <div class="input-group date" data-provide="datepicker">
          <input type="date" name="grad_date" class="form-control">
          <div class="input-group-addon">
            <span class="glyphicon glyphicon-th"></span>
          </div>
        </div>
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