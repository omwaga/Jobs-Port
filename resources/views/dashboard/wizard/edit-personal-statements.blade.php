
<!--Edit personal statement Modal -->
<div class="modal fade" id="personal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Your Personal Statement</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="/personalstatements/{{$personalstatements->id}}"> 
                      @csrf
                      @method('PATCH')
  <div class="row">
      <div class="col-md-12">
      <label>Personal Statement:</label>
      <textarea name="statement" class="form-control ckeditor" id="article-ckeditor" required autofocus rows="3"style="border-radius:0px;">{!!$personalstatements->statement!!}</textarea>    
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