
<div class="tab-pane" id="skills">
  @if($skills->count() > 0)
  <div class="col-lg-offset-1 col-lg-10">
    <button class="btn btn-info text-white btn-sm" data-toggle="modal" data-target="#newskill"><i class="fa fa-plus"></i>Add Skill</button>
    @include('dashboard.wizard.new-skill')
  </div>
  @endif
  <div class="col-lg-offset-1 col-lg-10">
    <h4>
      <strong>Skills</strong>
    </h4>
  </div>
  <div class="row">
    @forelse($skills as $skill)
    <div class="row">
      <div class="col-lg-offset-1 col-lg-10">
        <section class="panel panel-default">
          <div class="panel-body">
            <dl class="dl-horizontal">
              <dt>Name:</dt>
              <dd>{{$skill->skillname}}</dd>
              <dt>Expertise Level:</dt>
              <dd>{{$skill->level}}</dd>

              <p class="pull-right"><button class="btn btn-danger text-white btn-sm"  data-toggle="modal" 
                data-target="#editskill-{{$skill->id}}"><i class="fa fa-edit"></i> Edit </button></p>

                @include('dashboard.wizard.edit-skill')
              </dl>
            </div>
          </section>
        </div>
      </div>
      @empty
      <div class="col-lg-offset-1 col-lg-10">
        <form method="POST" action="/jobskills">
          @csrf
          <div class="col-md-6">
            <label>Skill Name:</label>
            <input name="skillname" type="text" class="form-control" required autofocus > 
          </div>
          <div class="col-md-6">
            <label>Expertise Level:</label>
            <select name="level" class="form-control" style="border-radius:0px;"required autofocus value="{{old('marital_status')}}">
             <option>Select Skill Level</option>
             <option>Beginner</option>
             <option>Intermediate</option>
             <option>Expert</option>
           </select>
         </div>
         <div class="col-md-12"><br>
          <button type="submit" class="btn btn-sm btn-danger pull-right">Save</button>   
        </div>
      </form>
    </div>
    @endforelse
  </div>
</div>