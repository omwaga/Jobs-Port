<div class="modal fade" id="career-{{$bi->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        {!!Form::open(['action'=>['DashboardController@editcareerprof',$bi->id],'method'=>'POST','class'=>'needs-validation'])!!}
                        {{csrf_field()}}
      <div class="modal-header">
        <h5 class="modal-title text-center" id="exampleModalLabel">Edit your career objective</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-xl-12">
                <label>Career Objective</label>
                <textarea name="ssummary" class="form-control" id="summ" rows="5">{{$bi->bio}}</textarea>
            </div>
        </div>
      </div>
      <div class="modal-footer">
          {!!Form::hidden('_method','PUT')!!}
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      {!!Form::close()!!}
    </div>
  </div>
</div>