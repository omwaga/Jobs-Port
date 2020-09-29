<div class="modal fade" id="talent-{{$jobseekerdetail->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <form action="/talentpool/{{$jobseekerdetail->name}}" method="POST">
     @method('PATCH')
     @csrf
     <input type="hidden" value="{{$jobseekerdetail->user_id}}" name="id">
      <div class="modal-header bg-primary text-white">
        <h6 class="modal-title text-white" id="exampleModalLabel">Add to talent pool?</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to add <b>{{$jobseekerdetail->name}}</b> to the talentpool?</p>
        <div class="form-group">
            <label>Select Talent Pool</label>
            <select name="pool_name" class="form-control">
                @foreach($talent as $talentpool)
                <option value="{{$talentpool->id}}">{{$talentpool->pool_name}}</option>
                @endforeach
            </select>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">No,close</button>
        <button type="submit" class="btn btn-primary btn-sm">Yes,Add</button>
      </div>
      </form>
    </div>
  </div>
</div>