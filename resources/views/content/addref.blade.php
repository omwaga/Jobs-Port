    <div class="modal fade" id="referee" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
         {!!Form::open(['action'=>'InfoController@reference','method'=>'POST','class'=>'needs-validation','enctype'=>'multipart/form-data'])!!}
         {{csrf_field()}}
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Referees</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <div class="row">
                <div class="col-lg-6">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="rname" required autofocus placeholder="james nyanga" style="border-radius:0px;">
                                        </div>
                                         <div class="col-lg-6">
                                         <label>Title</label>
                                        <input type="text" name="rtitle" class="form-control" required autofocus placeholder="developer Indepth research services" style="border-radius:0px;">
                                                                    </div>
                                                                </div>
             <br>
                                                       <div class="row">
                                                            <div class="col-lg-6">
                                                                <label>Phone</label>
                                                                <input type="tel" class="form-control" name="rphone" required autofocus placeholder="+254721531634"style="border-radius:0px;">
                                                            </div>
                                                            <div class="col-lg-6">
                                                                  <label>Email address</label>
                                                               <input type="email" name="remail" class="form-control" required autofocus placeholder="james@indepthresearch.co.ke"style="border-radius:0px;">
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <label>Company/Institution</label>
                                        <input type="text" name="rorganization" class="form-control" required autofocus placeholder=" Indepth research services" style="border-radius:0px;">
                                                            </div>
                                                        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"style="border-radius:0px;">Close</button>
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