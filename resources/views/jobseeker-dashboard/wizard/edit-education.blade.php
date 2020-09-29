<!--Edit Education details Modal -->
<div class="modal fade" id="editeducation-{{$educated->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Education Details </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{route('educations.update', $educated->id)}}">
          @csrf
          @method('PATCH')
          <div class="row">
           <input type="hidden" class="form-control" name="id" value="<?php echo $educated->id?>" required autofocus style="border-radius:0px;">
           <div class="col-md-4">
            <label>Institution:</label>
            <input type="text" class="form-control" name="institution" value="<?php echo $educated->institution?>" id="ins" required autofocus style="border-radius:0px;">
          </div>
          <div class="col-md-4">
           <label>Course:</label>
           <input type="text" class="form-control" name="qualification" value="<?php echo $educated->qualification?>" id="qual" required autofocus style="border-radius:0px;">
         </div>
         
         <div class="col-md-4">
          <label>Attained Score:</label>
          <input type="text" class="form-control" name="score" id="sco" value="<?php echo $educated->score?>" required autofocus style="border-radius:0px;">
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <label>Education Level:</label>
          <select name="level" class="form-control" style="border-radius:0px;" required autofocus>
           <option>{{$educated->level}}</option>
           <option>Certificate</option>
           <option>Diploma</option>
           <option>Degree</option>
           <option>Masters</option>
         </select>
       </div>
       
       <div class="col-md-4">
         <label>Start Date:</label>
         <div class="input-group date">
          <input type="date" value="<?php echo $educated->start_date?>" name="start_date" class="form-control">
          <div class="input-group-addon">
            <span class="glyphicon glyphicon-th"></span>
          </div>
        </div>
      </div>
      <div class="col-md-4">
       <label>Graduation Date:</label>
       <div class="input-group date">
        <input type="date" name="grad_date" value="<?php echo $educated->grad_date?>" class="form-control">
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