<div class="modal fade" id="consultancy" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
         {!!Form::open(['action'=>'InfoController@assignments','method'=>'POST','class'=>'needs-validation','enctype'=>'multipart/form-data'])!!}
         {{csrf_field()}}
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Consultancy and any short assignments if any</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <div class="row">
                <div class="col-lg-6">
                                    <label>Organization</label>
                                    <input type="text" class="form-control" name="organization" required autofocus  style="border-radius:0px;">
                                        </div>
                                         <div class="col-lg-6">
                                         <label>Position</label>
                                        <input type="text" name="position" class="form-control" required autofocus style="border-radius:0px;">
                                                                    </div>
                                                                </div>
             <br>
                                                       <div class="row">
                                                            <div class="col-lg-6">
                                                                <label>Type</label>
                                                                <select name="atype" class="form-control" style="border-radius:0px;">
                                                                    <option>Selet one</option>
                                                                    <option>Consultancy</option>
                                                                     <option>Training</option>
                                                                     <option>Voluntary</option>
                                                                      <option>Technical Assistant</option>
                                                                </select>
                                                            
                                                            </div>
                                                            <div class="col-lg-6">
                                                                  <label>Start Date</label>
                                                               <input type="date" name="sdate" class="form-control" required autofocus style="border-radius:0px;">
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <label>Duration</label>
                                        <input type="text" name="duration" class="form-control" required autofocus style="border-radius:0px;">
                                        <small>Duration can in terms of weeks or months .You can write 2 weeks, I month, 4 days e.t.c</small>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <label>Brief description</label>
                                                                <textarea name="bdescription" class="form-control" id="cdescc"  style="border-radius:0px;" rows="4" ></textarea>
                                                                <small>Give a brief description of what you achieved in the above assignment.</small>
                                                            </div>
                                                        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      {!!Form::close()!!}
    </div>
  </div>
</div>