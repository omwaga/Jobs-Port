<!--deleting job modal-->
<div class="modal fade" id="delete-{{$job->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Unpublish Job?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to Unpublish {{$job->job_title}} vacancy?</p>
      </div>
      <div class="modal-footer">
        <form  action="/jobposts/{{$job->id}}" method="POST">
          @csrf
          @method('DELETE')
          <input type="hidden" value="{{$job->id}}" name="job_id">
          <button type="button" class="btn btn-success" data-dismiss="modal">No</button>
          <button type="submit" class="btn btn-danger text-white pull-right">
            <i class="fa fa-mark"></i>Sure, Unpublish?
          </button>
        </form></div>
    </div>
  </div>
</div>