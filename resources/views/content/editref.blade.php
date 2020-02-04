<div class="modal fade" id="ref-{{$ref->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        {!!Form::open(['action'=>['InfoController@refupdate',$ref->id],'method'=>'POST','class'=>'needs-validation'])!!}
                        {{csrf_field()}}
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b>You are editing {{$ref->name}}</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
                      <div class="col-lg-6">
                          <label>Name</label>
                          <input type="text" class="form-control" name="rname" value="<?php echo $ref->name?>" required autofocus>
                      </div>
                      <div class="col-lg-6">
                            <label>Position</label>
                            <input type="text" class="form-control" name="rposition" value="<?php echo $ref->position?>" required autofocus>

                      </div>
                  </div>
                  <br>
                  <div class="row">
                        <div class="col-lg-6">
                              <label>Telephone</label>
                              <input type="tel" name="rphone" class="form-control" value="<?php echo $ref->phone?>" required autofocus>

                        </div>
                        <div class="col-lg-6">
                               <label>Email Address</label>
                               <input type="email" name="remail" class="form-control" value="<?php echo $ref->email?>" required autofocus>

                         </div> 
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-6">
                           <label>Company/Institution</label>
                               <input type="text" name="rorganization" class="form-control" value="<?php echo $ref->organization?>" required autofocus> 
                        </div>
                    </div>
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