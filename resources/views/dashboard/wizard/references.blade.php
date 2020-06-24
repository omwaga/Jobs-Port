
<div class="tab-pane" id="references">
  @if($references->count() > 0)
  <div class="col-lg-offset-1 col-lg-10">
    @include('dashboard.wizard.new-reference')
    <button class="btn btn-info text-white btn-sm" data-toggle="modal" data-target="#newreferee"><i class="fa fa-plus"></i>Add Referee</button>
  </div>
  @endif
  <div class="col-lg-offset-1 col-lg-10">
    <h4>
      <strong>Work Experiences</strong>
    </h4>
  </div>
  <div class="row">
    @forelse($references as $reference)
    <div class="row">
      <div class="col-lg-offset-1 col-lg-10">
        <section class="panel panel-default">
          <div class="panel-body">
            <dl class="dl-horizontal">
              <dt>Name:</dt>
              <dd>{{$reference->name}}</dd>
              <dt>Email:</dt>
              <dd>{{$reference->email}}</dd>
              <dt>Phone Number:</dt>
              <dd>{{$reference->phone}}</dd>
              <dt>Organization:</dt>
              <dd>{{$reference->position}} at {{$reference->organization}}</dd>

              <p class="pull-right"><button class="btn btn-danger text-white btn-sm"  data-toggle="modal" 
                data-target="#editref-{{$reference->id}}"><i class="fa fa-edit"></i> Edit </button></p>

                @include('dashboard.wizard.edit-reference')
              </dl>
            </div>
          </section>
        </div>
      </div>
      @empty
      <div class="col-lg-offset-1 col-lg-10">
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

        <div class="col-md-12"><br>
          <button type="submit" class="btn btn-sm btn-danger pull-right">Save</button>   
        </div>
      </form>
    </div>
    @endforelse
  </div>
</div>