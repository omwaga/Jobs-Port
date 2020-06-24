<!--New Skill Modal -->
<div class="modal fade" id="newskill" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Skill</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form method="POST" action="/jobskills">
        @csrf
        <div class="row">
          <div class="col-md-6">
            <label>Skill Name:</label>
            <input name="skillname" type="text" class="form-control" required autofocus > 
          </div>
          <div class="col-md-6">
            <label>Expertise Level:</label>
            <select name="level" class="form-control" style="border-radius:0px;"required autofocus value="{{old('marital_status')}}">
             <option>Select Skill Level</option>
             <option>Beginner</option>
             <option>Intermediate</option>
             <option>Expert</option>
           </select>
         </div>
       </div><br>
       
       <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Save & Continue</button>
      </div>
    </form>
  </div>
</div>
</div>
</div>