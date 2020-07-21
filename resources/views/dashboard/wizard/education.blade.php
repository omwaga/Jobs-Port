
<!-- education section -->
<div class="tab-pane" id="education">
  @if($education->count() > 0)  
  <div class="col-lg-offset-1 col-lg-10">
    <button class="btn btn-info text-white btn-sm"  data-toggle="modal" data-target="#neweducation"><i class="fa fa-plus"></i>Add Edcation</button>
    @include('dashboard.wizard.new-education')
  </div> 
  @endif
  <div class="col-lg-offset-1 col-lg-10">
    <h4>
      <strong>Education History</strong>
    </h4>
  </div>
  <div class="row">
    @forelse($education as $educated)
    @include('dashboard.wizard.edit-education')
    <div class="row">
      <div class="col-lg-offset-1 col-lg-10">
        <section class="panel panel-default">
          <div class="panel-body">
            <dl class="dl-horizontal">
              <dt>Dates:</dt>
              <dd>{{\Carbon\Carbon::parse($educated->start_date)->format('Y')}}-{{\Carbon\Carbon::parse($educated->grad_date)->format('Y')}}</dd>
              <dt>Course:</dt>
              <dd>{{$educated->qualification}} from {{$educated->institution}}</dd>
              <dt>Level:</dt></h6>
              <dd>{{$educated->level}}</dd>
              <dt>Score:</dt></h6>
              <dd>{{$educated->score}}</dd>

              <p class="pull-right">
                <button class="btn btn-info text-white btn-sm"
                data-toggle="modal" data-target="#editeducation-{{$educated->id}}"><i class="fa fa-edit"></i> Edit </button>
                <form method="POST" action="{{route('educations.destroy', $educated->id)}}">
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
      <form method="POST" action="/educations">
        @csrf
        <div class="col-md-4">
          <label>Institution Name:</label>
          <input type="text" class="form-control" name="institution" required autofocus style="border-radius:0px;">
        </div>
        <div class="col-md-4">
         <label>Name of Course Studied:</label>
         <input type="text" class="form-control" name="qualification" placeholder="Bsc. Computer Science" required autofocus style="border-radius:0px;">
       </div>

       <div class="col-md-4">
        <label>Education Level:</label>
        <select name="level" class="form-control" style="border-radius:0px;"required autofocus value="{{old('marital_status')}}">
         <option>Select Education Level</option>
         <option>Certificate</option>
         <option>Diploma</option>
         <option>Degree</option>
         <option>Masters</option>
       </select>
     </div>

     <div class="col-md-4">
       <label>Start Date:</label>
       <div class="input-group date">
        <input type="date" name="start_date" class="form-control">
        <div class="input-group-addon">
          <span class="glyphicon glyphicon-th"></span>
        </div>
      </div>
    </div>
    <div class="col-md-4">
     <label>Graduation Date:</label>
     <div class="input-group date">
      <input type="date" name="grad_date" class="form-control">
      <div class="input-group-addon">
        <span class="glyphicon glyphicon-th"></span>
      </div>
    </div>
  </div>

  <div class="col-md-4">
    <label>Attained Score:<br>
      <small>For example: First Class Honors</small></label>
      <input type="text" class="form-control" name="score" autofocus style="border-radius:0px;">
    </div>

    <div class="col-md-12"><br>
      <button type="submit" class="btn btn-sm btn-danger pull-right">Save</button>   
    </div>
  </form>
</div>
@endforelse
</div>
</div>
          <!-- end education section -->