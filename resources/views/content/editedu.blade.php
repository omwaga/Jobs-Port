<div class="modal fade" id="modal-<?php echo $academic->id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
           {!!Form::open(['action'=>['InfoController@updateacademic',$academic->id],'method'=>'POST','class'=>'needs-validation'])!!}
                        {{csrf_field()}}
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">You are editing {{$academic->course}} qualification</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
                      <div class="col-lg-6">
                           <label>Course Name</label>
      <input type="text" class="form-control" name="course" placeholder="KCSE" value="<?php echo $academic->course ?>" required autofocus style="border-radius:0px;">
                      </div>
                      <div class="col-lg-6">
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
                        <div class="col-lg-6">
                               <label>Institution</label>
      <input type="text" class="form-control" name="institution" placeholder="Kenyatta University" value="<?php echo $academic->institution ?>" required autofocus style="border-radius:0px;">

                        </div>
                        <div class="col-lg-6">
<label>Start Date</label>
      <input type="date" class="form-control" name="sdate" value="<?php echo $academic->sdate ?>" placeholder="KCSE" required autofocus style="border-radius:0px;">

                         </div> 
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-6">
                                                           <label>End Date</label>
      <input type="date" class="form-control" name="edate" value="<?php echo $academic->edate ?>" placeholder="KCSE" required autofocus  style="border-radius:0px;">
                             
                        </div>
                    </div>
                    <br>
      </div>
      <div class="modal-footer">
           {!!Form::hidden('_method','PUT')!!}
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
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