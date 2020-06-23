
<div class="tab-pane" id="references">
  <div>
    @include('dashboard.wizard.new-reference')
    <button class="btn btn-info text-white btn-sm" data-toggle="modal" data-target="#newreferee"><i class="fa fa-plus"></i>Add Referee</button>
  </div>
  <div class="row">
    @forelse($references as $reference)
    <div class="col-md-6 profile-text">
      <label><strong>Name:</strong> {{$reference->name}}</label><br>
      <label><strong>Email:</strong> {{$reference->email}}</label><br>
      <label><strong>Phone Number:</strong> {{$reference->phone}}</label><br>
    </div>
    <div class="col-md-6 profile-text">
      <label><strong>Organization:</strong> {{$reference->organization}}</label><br>
      <label><strong>Position:</strong> {{$reference->position}}</label><br>

      <p class="pull-right"><button class="btn btn-danger text-white btn-sm"  data-toggle="modal" 
        data-target="#editref-{{$reference->id}}"><i class="fa fa-edit"></i> Edit </button></p>

        @include('dashboard.wizard.edit-reference')

      </div>
      @empty
      <form method="POST" action="/references">
        @csrf
        <div class="col-lg-4">
          <label>Name:</label>
          <input type="text" class="form-control" name="name" required autofocus placeholder="Full Name" style="border-radius:0px;">
        </div>
        <div class="col-lg-4">
         <label>Title:</label>
         <input type="text" name="position" class="form-control" required autofocus placeholder="Title" style="border-radius:0px;">
       </div>
       <div class="col-lg-4">
        <label>Phone Number:</label>
        <input type="tel" class="form-control" name="phone" required autofocus placeholder="Phone Number"style="border-radius:0px;">
      </div>

      <div class="col-lg-4">
        <label>Email address:</label>
        <input type="email" name="email" class="form-control" required autofocus placeholder="Email Address"style="border-radius:0px;">
      </div>
      <div class="col-lg-4">
        <label>Organization:</label>
        <input type="text" name="organization" class="form-control" required autofocus placeholder=" Organization" style="border-radius:0px;">
      </div>

      <div class="col-md-12">
        <button type="submit" class="btn btn-danger pull-right">Save</button>   
      </div>
    </form>
    @endforelse
  </div>
</div>