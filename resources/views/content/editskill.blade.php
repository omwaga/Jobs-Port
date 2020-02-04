<div class="modal fade" id="mod-{{$skill->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-id="{{$skill->id}}"> >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        {!!Form::open(['action'=>['InfoController@editskill',$skill->id],'method'=>'POST','class'=>'needs-validation'])!!}
                        {{csrf_field()}}
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">You are editing {{$skill->skillname}} Skill </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
           <div class="row">
                                                       <div class="col-lg-12">
                                                           <label>Skill Name</label>
                                                           <input type="text" class="form-control" name="skill" value="<?php echo $skill->skillname?>" required autofocus style="border-radius:0px;">
                                                       </div>
                                                       <br>
                                                       <div class="col-lg-12">
                                                           <label>Level</label>
                                                       <select name="level"  class="form-control" style="border-radius:0px;" value="<?php echo $skill->level?>">
                            <option>Select one</option>
                            <option>Beginner</option>
                            <option>Intermediate</option>
                            <option>Expert</option>
                                                           </select>
                                     
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