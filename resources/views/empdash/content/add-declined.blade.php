<div class="modal fade" id="decline-{{$jobseekerdetail->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <form action="/decline-application" method="POST">
     @csrf 
     <input type="hidden" value="{{$jobseekerdetail->user_id}}" name="id">
      <div class="modal-header bg-info text-white">
        <h6 class="modal-title text-white" id="exampleModalLabel">Decline Candidate Application</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to decline application from <b>{{$jobseekerdetail->name}}</b> ? </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">No,close</button>
        <button type="submit" class="btn btn-primary btn-sm">Yes,Decline</button>
      </div>
      </form>
    </div>
  </div>
</div>