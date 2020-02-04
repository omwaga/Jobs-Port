<div class="modal fade" id="moda-{{$award->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-id="{{$award->id}}">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        {!!Form::open(['action'=>['InfoController@updatecert',$award->id],'method'=>'POST','class'=>'needs-validation'])!!}
                        {{csrf_field()}}
                  
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">You are editing {{$award->name}} course</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
                      <div class="col-lg-6">
                          <label>Certificate Name</label>
                        <input type="text" class="form-control" name="cname" value="<?php echo $award->name ?>" required autofocus style="border-radius:0px;">
                      </div>
                      <div class="col-lg-6">
                            <label>Institution</label>
                            <input type="text" name="cinstitution" value="<?php echo $award->institution ?>" class="form-control" required autofocus style="border-radius:0px;">

                      </div>
                  </div>
                  <br>
                    <div class="row">
                           <div class="col-lg-12">
                                    <label>Brief Description</label>
                            <textarea name="cdescription" class="form-control briefd" id="article-ckeditor2" rows="4" required autofocus>{!!$award->description!!}</textarea>
                               </div>    
                    </div>
      </div>
      <div class="modal-footer">
           {!!Form::hidden('_method','PUT')!!}
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
        @if (session('status'))
                    <div class="alert alert-success">
                    {{ session('status') }}
                             </div>
                             @endif
{!!Form::close()!!}
    </div>
  </div>
</div>