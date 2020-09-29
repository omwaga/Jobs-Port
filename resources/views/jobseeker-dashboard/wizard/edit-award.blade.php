<!--Edit Award Modal -->
<div class="modal fade" id="editaward-{{$award->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Award Details </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{route('awards.update', $award->id)}}">
          @csrf
          @method('PATCH')
          <div class="row">
           <input type="hidden" class="form-control" name="id" value="{{$award->id}}" required autofocus style="border-radius:0px;">
           <div class="col-md-4">
            <label>Award Name:</label>
            <input type="text" class="form-control" name="name" value="{{$award->name}}" id="name" required autofocus style="border-radius:0px;">
          </div>
          <div class="col-md-4">
           <label>Award/Certification Body:</label>
           <input type="text" class="form-control" name="institution" value="{{$award->institution}}" id="ins" required autofocus style="border-radius:0px;">
         </div>
         <div class="col-md-3">
           <label>Award/Qualification Date:</label>
           <div class="input-group date">
            <input type="date" name="award_date" value="{{$award->award_date}}" class="form-control">
            <div class="input-group-addon">
              <span class="glyphicon glyphicon-th"></span>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        
        <div class="col-md-12">
          <label>Description:</label>
          <textarea name="description" class="form-control ckeditor" id="award" required autofocus rows="2"style="border-radius:0px;">{{$award->description}}</textarea> 
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