
<div class="tab-pane" id="awards">
  @if($awards->count() > 0)
  <div class="col-lg-offset-1 col-lg-10">
    <button class="btn btn-info text-white btn-sm"  data-toggle="modal" data-target="#newaward"><i class="fa fa-plus"></i>Add Award/Certification</button>
    @include('dashboard.wizard.new-award')
  </div>
  @endif
  <div class="col-lg-offset-1 col-lg-10">
    <h4>
      <strong>Awards and Certifications</strong>
    </h4>
  </div>
  <div class="row">
    @forelse($awards as $award)
    <div class="row">
      <div class="col-lg-offset-1 col-lg-10">
        <section class="panel panel-default">
          <div class="panel-body">
            <dl class="dl-horizontal">
              <dt>Dates:</dt>
              <dd>{{\Carbon\Carbon::parse($award->award_date)->format('d/m/Y')}}</dd>
              <dt>Name:</dt>
              <dd>{{$award->name}} from {{$award->institution}}</dd>
              <dt>Description:</dt></h6>
              <dd>{!!$award->description!!}</dd>

              <p class="pull-right"><button class="btn btn-danger text-white btn-sm"  data-toggle="modal"
                data-target="#editaward-{{$award->id}}"><i class="fa fa-edit"></i> Edit </button></p>
                
                @include('dashboard.wizard.edit-award')
              </dl>
            </div>
          </section>
        </div>
      </div>
      @empty
      <div class="col-lg-offset-1 col-lg-10">
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

        <div class="col-md-12"><br>
          <button type="submit" class="btn btn-sm btn-danger pull-right">Save</button>   
        </div>
      </form>
    </div>
    @endforelse
  </div>
</div>