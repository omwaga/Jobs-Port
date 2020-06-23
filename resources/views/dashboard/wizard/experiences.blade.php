
<div class="tab-pane" id="address">
  <div class="row">

    <div class="profile-text">
      <br><p><button class="btn btn-info text-white btn-sm"  data-toggle="modal" data-target="#newexperience"><i class="fa fa-plus"></i>Add Experience</button></p><br>
      
      @include('dashboard.wizard.new-experience')
    </div>
    @forelse($experience as $experienced)
    @include('dashboard.wizard.edit-experience')
    <div class="col-md-6 profile-text">
      <label><strong>Employer:</strong> {{$experienced->employer}}</label><br>
      <label><strong>Position:</strong> {{$experienced->position}}</label><br>
    </div>
    <div class="col-md-6 profile-text">
      <label><strong>Stat Date:</strong> {{$experienced->start_date}}</label><br>
      <label><strong>End Date:</strong> {{$experienced->current_employer ?? $experienced->end_date}}</label>

      <p class="pull-right"><button class="btn btn-danger text-white btn-sm"
        data-toggle="modal" data-target="#experience-{{$experienced->id}}"><i class="fa fa-edit"></i> Edit </button></p>
      </div>
      <div class="col-md-12">
        <h6><b>Duties and Responsibilities</b></h6>
        <p>{!!$experienced->roles!!}</p>
      </div><br>
      @empty
      <form method="POST" action="/experiences">
        @csrf
        <div class="col-md-3">
          <label>Employer:</label>
          <input type="text" class="form-control" name="employer" placeholder="Organization" required autofocus style="border-radius:0px;">
        </div>
        <div class="col-md-3">
          <label>Position:</label>
          <input type="text" class="form-control" name="position" placeholder="Job Position" required autofocus style="border-radius:0px;">
        </div>
        <div class="col-md-3">
          <label>Employment Start Date:</label>
          <div class="input-group date">
            <input type="date" name="start_date" class="form-control">
            <div class="input-group-addon">
              <span class="glyphicon glyphicon-th"></span>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <label>Employment End Date:</label>
          <div class="input-group date">
            <input type="date" name="end_date" class="form-control">
            <div class="input-group-addon">
              <span class="glyphicon glyphicon-th"></span>
            </div>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="hidden" name="current_employer" value="" id="defaultCheck1">
            <input class="form-check-input" type="checkbox" name="current_employer" value="current employer" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">
              Current Employer
            </label>
          </div>
        </div>
        <div class="col-md-12">
          <label>Achievements and Responsibilities:</label>
          <textarea name="roles" class="form-control ckeditor" id="duties" required autofocus rows="3"style="border-radius:0px;"></textarea>    
        </div>

        <div class="col-md-12">
          <button type="submit" class="btn btn-danger pull-right">Save</button>   
        </div>
      </form>
      @endforelse
    </div>
  </div>