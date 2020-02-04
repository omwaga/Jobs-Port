
<div class="modal fade" id="career" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <form method="post" action="{{route('updatecareer')}}">
            @csrf
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b class="text-center">Edit your career summary</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-xl-12">
                <label>Career Objective</label>
                <textarea name="ssummary" class="form-control" id="summ" rows="5"></textarea>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
       @if (session('status'))
                    <div class="alert alert-success">
                    {{ session('status') }}
                             </div>
                             @endif
</form>
    </div>
  </div>
</div>
