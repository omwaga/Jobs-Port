<div class="modal fade" id="experienceadd" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
        {!!Form::open(['action'=>'InfoController@experience','method'=>'POST','class'=>'needs-validation'])!!}
        {{csrf_field()}}
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Add your Work Experience</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    <div class="row">
    <div class="col">
      <label>Position</label>
       <input type="text" class="form-control" name="position" required autofocus style="border-radius:0px;">
    </div>
    <div class="col">
     <label>Company</label>
     <input type="text" class="form-control" name="company" required autofocus style="border-radius:0px;">
    </div>
  </div>
  <br>
   <div class="row">
    <div class="col">
      <label>Start Date</label>
       <input type="date" class="form-control" name="sdate" required autofocus style="border-radius:0px;">
    </div>
    <div class="col">
     <label>End Date</label>
     <input type="date" class="form-control" name="edate" required autofocus>
    </div>
  </div>
  <br>
  <div class="row">
      <div class="col">
      <label>Brief Description</label>
      <textarea name="description" class="form-control" id="article-ckeditor" required autofocus rows="3"style="border-radius:0px;"></textarea>    
      </div>
  </div>
  <br>
   <div class="row">
      <div class="col">
      <label>Detailed Description</label>
      <textarea name="tdescription" placeholder="You can list your achievements here"class="form-control" id="tdesct" required autofocus rows="3"style="border-radius:0px;"></textarea>    
      </div>
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"style="border-radius:0px;">Close</button>
        <button type="submit" class="btn btn-primary"style="border-radius:0px;">Save changes</button>
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