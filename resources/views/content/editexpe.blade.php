<div class="modal fade" id="{{$experien->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-id="{{$experien->id}}">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        {!!Form::open(['action'=>['InfoController@update',$experien->id],'method'=>'POST','class'=>'needs-validation'])!!}
                        {{csrf_field()}}
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">You are editing {{$experien->position}} Position</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="row">
                      <div class="col-lg-6">
                          <label>Position</label>
                          <input type="text" class="form-control" name="position" value="<?php echo $experien->position?>" required autofocus>
                      </div>
                      <div class="col-lg-6">
                            <label>Company</label>
                            <input type="text" class="form-control" name="company" value="<?php echo $experien->company?>" required autofocus>

                      </div>
                  </div>
                  <br>
                  <div class="row">
                        <div class="col-lg-6">
                              <label>Start date</label>
                              <input type="date" name="sdate" class="form-control" value="<?php echo $experien->start?>" required autofocus>

                        </div>
                        <div class="col-lg-6">
                               <label>End date</label>
                               <input type="date" name="edate" class="form-control" value="<?php echo $experien->enddate?>" required autofocus>

                         </div> 
                    </div>
                    <br>
                    <div class="row">
                           <div class="col-lg-12">
                                   <label>Brief Description</label>
                           <textarea name="description" class="form-control" id="editexx" required autofocus rows="3">{{$experien->description}}</textarea>
                               </div>    
                    </div>
                    <div class="row">
      <div class="col">
      <label>Detailed Description</label>
      <textarea name="tdescription" class="form-control" id="tdesct" required autofocus rows="3"style="border-radius:0px;">{{$experien->tdescription}}</textarea>    
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