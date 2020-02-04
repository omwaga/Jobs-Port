        <div class="modal fade" id="academicupdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
         {!!Form::open(['action'=>'InfoController@store','method'=>'POST','class'=>'needs-validation'])!!}
         {{csrf_field()}}
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Add your academic Qualififcations</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <div class="row">
    <div class="col">
        <label>Course Name</label>
      <input type="text" class="form-control" name="course" placeholder="KCSE" required autofocus style="border-radius:0px;">
    </div>
    <div class="col">
     <label>Course type</label>
                                                        <select name="ctype" class="form-control"style="border-radius:0px;">
                                                          <option>Certificate</option>
                                                          <option>Diploma</option>
                                                          <option>Degree</option>
                                                          <option>Masters</option>
                                                          <option>PHD</option>
                                                        </select>
    </div>
  </div>
  <br>
  <div class="row">
        <div class="col">
        <label>Institution</label>
      <input type="text" class="form-control" name="institution" placeholder="Kenyatta University" required autofocus style="border-radius:0px;">
    </div>
       <div class="col">
        <label>Start Date</label>
      <input type="date" class="form-control" name="sdate" placeholder="KCSE" required autofocus style="border-radius:0px;">
    </div>
  </div>
  <br>
    <div class="row">
       <div class="col">
        <label>End Date</label>
      <input type="date" class="form-control" name="edate" placeholder="KCSE" required autofocus style="border-radius:0px;">
    </div>
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="border-radius:0px;"><i class="fas fa-window-close"></i> Close</button>
        <button type="submit" class="btn btn-primary" style="border-radius:0px;">Save changes</button>
      </div>
      @if (session('status'))
      <div class="alert alert-success">
      {{ session('status') }}
     </div>
         @endif
              {!!Form::close()!!}
    </div>
  </div>
</div>