
<div class="tab-pane" id="skills">
  <div>
    <button class="btn btn-info text-white btn-sm" data-toggle="modal" data-target="#newskill"><i class="fa fa-plus"></i>Add Skill</button>
    @include('dashboard.wizard.new-skill')
  </div>
  <div class="row">
    @forelse($skills as $skill)
    <div class="col-md-12 profile-text">
      <label><strong>Skill Name:</strong> {{$skill->skillname}}</label><br>
      <label><strong>Expertise Level:</strong> {{$skill->level}}</label><br>

      <p class="pull-right"><button class="btn btn-danger text-white btn-sm"  data-toggle="modal" 
        data-target="#editskill-{{$skill->id}}"><i class="fa fa-edit"></i> Edit </button></p>

        @include('dashboard.wizard.edit-skill')

      </div>
      @empty
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
       <div class="col-md-12">
        <button type="submit" class="btn btn-danger pull-right">Save</button>   
      </div>
    </form>
    @endforelse
  </div>
</div>