
<div class="tab-pane" id="address">
  <div class="row">
    @if($experience->count() > 0)
    <div class="col-lg-offset-1 col-lg-10">
      <button class="btn btn-info text-white btn-sm"  data-toggle="modal" data-target="#newexperience"><i class="fa fa-plus"></i>Add Experience</button>
      @include('dashboard.wizard.new-experience')
    </div>
    @endif
    <div class="col-lg-offset-1 col-lg-10">
      <h4>
        <strong>Work Experiences</strong>
      </h4>
    </div>
    @forelse($experience as $experienced)
    @include('dashboard.wizard.edit-experience')
    <div class="row">
      <div class="col-lg-offset-1 col-lg-10">
        <section class="panel panel-default">
          <div class="panel-body">
            <dl class="dl-horizontal">
              <dt>Dates:</dt>
              <dd>{{ \Carbon\Carbon::parse($experienced->start_date)->format('Y')}}-{{$experienced->current_employer ?? \Carbon\Carbon::parse($experienced->end_date)->format('Y')}}</dd>
              <dt>Position:</dt>
              <dd>{{$experienced->position}} at {{$experienced->employer}}</dd>
              <dt>Responsibilities:</dt></h6>
              <dd>{!!$experienced->roles!!}</dd>

              <p class="pull-right">
                <button class="btn btn-info text-white btn-sm"
                data-toggle="modal" data-target="#experience-{{$experienced->id}}"><i class="fa fa-edit"></i> Edit </button>
                <form method="POST" action="{{route('experiences.destroy', $experienced->id)}}">
                @csrf
                @method('DELETE')                  
                  <button class="btn btn-danger text-white btn-sm" type="submit"><i class="fa fa-edit"></i> Delete </button>
                </form>
              </p>
            </dl>
          </div>
        </section>
      </div>
    </div>
    @empty
    <div class="col-lg-offset-1 col-lg-10">
      <form method="POST" action="/experiences">
        @csrf
        <div class="col-md-6">
          <label>Employer:</label>
          <input type="text" class="form-control" name="employer" placeholder="Organization" required autofocus style="border-radius:0px;">
        </div>
        <div class="col-md-6">
          <label>Position:</label>
          <input type="text" class="form-control" name="position" placeholder="Job Position" required autofocus style="border-radius:0px;">
        </div>
        <div class="col-md-6">
          <label>Employment Start Date:</label>
          <div class="input-group date">
            <input type="date" name="start_date" class="form-control">
            <div class="input-group-addon">
              <span class="glyphicon glyphicon-th"></span>
            </div>
          </div>
        </div>
        <div class="col-md-6">
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

        <div class="col-md-12"><br>
          <button type="submit" class="btn btn-danger btn-sm pull-right">Save</button>   
        </div>
      </form>
    </div>
    @endforelse
  </div>
</div>