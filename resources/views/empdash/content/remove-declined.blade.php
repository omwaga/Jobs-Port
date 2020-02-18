<div class="modal fade" id="removeapplicant-{{$applicant->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <form action="{{route('removedeclined')}}" method="POST">
     @csrf 
     @method('DELETE')
     <input type="hidden" value="{{$applicant->user_id}}" name="id">
      <div class="modal-header bg-info text-white">
        <h6 class="modal-title text-white" id="exampleModalLabel">Remove Candidate</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to remove <b>{{$applicant->user->name ?? ''}}</b> ? </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">No,close</button>
        <button type="submit" class="btn btn-primary btn-sm">Yes,Remove</button>
      </div>
      </form>
    </div>
  </div>
</div>