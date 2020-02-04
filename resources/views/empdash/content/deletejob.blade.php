<!--deleting job modal-->
<div class="modal fade" id="delete-{{$job->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to Delete {{$job->jobtitle}} vacancy?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body">
         <form  action="/joblist/{{$job->id}}" method="POST">
			 @csrf
			 @method('DELETE')
             <input type="hidden" value="" name="jobid" id="job-id">
		     <button type="button" class="btn btn-success" data-dismiss="modal">No</button>
		     <button type="submit" class="btn btn-danger text-white pull-right">
			   <i class="fa fa-mark"></i>Sure, Delete?
			 </button>
         </form>
        </div>
    </div>
  </div>
</div>