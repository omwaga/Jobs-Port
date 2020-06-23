
<!-- education section -->
<div class="tab-pane" id="education">
  <div>
    <button class="btn btn-info text-white btn-sm"  data-toggle="modal" data-target="#neweducation"><i class="fa fa-plus"></i>Add Edcation</button>
    @include('dashboard.wizard.new-education')
  </div>
  <div class="row">
    @forelse($education as $educated)   
    @include('dashboard.wizard.edit-education')
    <div class="col-md-6">
      <label><strong>Institution Name:</strong> {{$educated->institution}}</label><br>
      <label><strong>Name of Course Studied:</strong> {{$educated->qualification}}</label><br>
      <label><strong>Education Level:</strong> {{$educated->level}}</label><br>
      <label><strong>Attained Score:</strong>{{$educated->score}}</label>
    </div>
    <div class="col-md-6">
      <label><strong>Start Date:</strong> {{$educated->start_date}}</label><br>
      <label><strong>Graduation Date:</strong> {{$educated->grad_date}}</label><br>

      <p class="pull-right"><button class="btn btn-danger text-white btn-sm"
        data-toggle="modal" data-target="#editeducation-{{$educated->id}}"><i class="fa fa-edit"></i> Edit </button></p>
      </div>
      @empty
      <form method="POST" action="/education">
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
    <div class="col-md-4" style="margin-left:10px;">
     <label>Graduation Date:</label>
     <div class="input-group date">
      <input type="date" name="grad_date" class="form-control">
      <div class="input-group-addon">
        <span class="glyphicon glyphicon-th"></span>
      </div>
    </div>
  </div>

  <div class="col-md-4" style="margin-left:40px;">
    <label>Attained Score:<br>
      <small>For example: First Class Honors</small></label>
      <input type="text" class="form-control" name="score" autofocus style="border-radius:0px;">
    </div>

    <div class="col-md-12">
      <button type="submit" class="btn btn-danger pull-right">Save</button>   
    </div>
  </form>
  @endforelse
</div>
</div>
          <!-- end education section -->