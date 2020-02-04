<div class="modal fade" id="profcert" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
         {!!Form::open(['action'=>'InfoController@procert','method'=>'POST','class'=>'needs-validation','enctype'=>'multipart/form-data'])!!}
                                                     {{csrf_field()}}
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add your professional qualifications</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <div class="row">
                                                   <div class="col-lg-6">
                                                       <label>Certificate Name</label>
                                                       <input type="text" class="form-control" name="cname" required autofocus style="border-radius:0px;">
                                                   </div>
                                                   <div class="col-lg-6">
                                                         <label>Institution</label>
                                                      <input type="text" name="cinstitution" class="form-control" required autofocus style="border-radius:0px;">
                                                   </div>
                                                   </div>
                                                   <br>
                                                 <div class="row">
                                                         <div class="col">
                                                                 <label>Brief Description</label>
                                                                 <textarea name="cdescription" class="form-control briefd" id="article-ckeditor1" rows="4" required autofocus></textarea>
        
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