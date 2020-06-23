
<div class="tab-pane" id="awards">
  <div>
    <button class="btn btn-info text-white btn-sm"  data-toggle="modal" data-target="#newaward"><i class="fa fa-plus"></i>Add Award/Certification</button>
    @include('dashboard.wizard.new-award')
  </div>
  <div class="row">
    @forelse($awards as $award)
    <div class="col-md-6 profile-text">
      <label><strong>Award Name:</strong> {{$award->name}}</label><br>
      <label><strong>Institution:</strong> {{$award->institution}}</label><br>
    </div>
    <div class="col-md-6 profile-text">
      <label><strong>Award Date:</strong> {{$award->award_date}}</label><br>
      <label><strong>Description:</strong> {!!$award->description!!}</label><br>
      
      <p class="pull-right"><button class="btn btn-danger text-white btn-sm"  data-toggle="modal"
        data-target="#editaward-{{$award->id}}"><i class="fa fa-edit"></i> Edit </button></p>
        
        @include('dashboard.wizard.edit-award')

      </div>
      @empty
      <form method="POST" action="/awards">
        @csrf
        <div class="col-md-4">
          <label>Award Name:</label>
          <input type="text" class="form-control" name="name" required autofocus style="border-radius:0px;">
        </div>
        <div class="col-md-4">
         <label>Institution:</label>
         <input type="text" class="form-control" name="institution" required autofocus style="border-radius:0px;">
       </div>

       <div class="col-md-4">
         <label>Award/Qualification Date:</label>
         <div class="input-group date">
          <input type="date" name="award_date" class="form-control">
          <div class="input-group-addon">
            <span class="glyphicon glyphicon-th"></span>
          </div>
        </div>
      </div>

      <div class="col-md-12">
        <label>Description:</label>
        <textarea name="description" class="form-control ckeditor" id="award" required autofocus rows="3"style="border-radius:0px;"></textarea> 
      </div>

      <div class="col-md-12">
        <button type="submit" class="btn btn-danger pull-right">Save</button>   
      </div>
    </form>
    @endforelse
  </div>
</div>