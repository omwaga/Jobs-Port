<div class="tab-pane" id="account">
  @if($personalstatements)
  <div class="col-lg-offset-1 col-lg-10">
    <section class="panel panel-default">
      <div class="panel-body">
        <dl class="dl-horizontal">
          <dt>Personal Statement:</dt>
          <dd>{!!$personalstatements->statement!!}</dd>
          <dt>Job Roles:</dt>
          <dd>{{$personalstatements->category1}}</dd>
          <dd>{{$personalstatements->category2}}</dd>
          <dd>{{$personalstatements->category3}}</dd>
          <dd>{{$personalstatements->category4}}</dd>
          <dd>{{$personalstatements->category5}}</dd>
          <dd>{{$personalstatements->category6}}</dd>
          <dd>{{$personalstatements->category7}}</dd>
          <dd>{{$personalstatements->category8}}</dd>
          <dd>{{$personalstatements->category9}}</dd>
          <dd>{{$personalstatements->category10}}</dd>
          <dd>{{$personalstatements->category11}}</dd>
          <dd>{{$personalstatements->category12}}</dd>
          <dd>{{$personalstatements->category13}}</dd>
          <dd>{{$personalstatements->category14}}</dd>
          <dd>{{$personalstatements->category15}}</dd>
          <dd>{{$personalstatements->category16}}</dd>
          <dd>{{$personalstatements->category18}}</dd>
          <dd>{{$personalstatements->category19}}</dd>
          <dd>{{$personalstatements->category20}}</dd>

          <p class="pull-right"><button class="btn btn-danger text-white btn-sm"  data-toggle="modal" data-target="#personal"><i class="fa fa-edit"></i> Edit </button></p>

          @include('dashboard.wizard.edit-personal-statements')
        </dl>
      </div>
    </section>
  </div>
  @else
  <form method="POST" action="/personalstatements">
    @csrf
    <div class="row">

      <div class="col-sm-10 col-sm-offset-1">   
        <div class="form-group">
          <label>Personal Statement: <small class="text-danger">Brief Description about yourself</small></label>
          <textarea name="statement" class="form-control ckeditor"></textarea>
        </div> 

        <label>Job Role Category: <small class="text-danger">Select all that apply</small></label>
        @foreach($categories as $category)
        <!-- <div class="form-group">           -->
          <div class="form-check">
            <input type="checkbox" name="category{{$category->id}}" class="form-check-input" id="exampleCheck{{$category->id}}" value="{{$category->name}}">
            <label class="form-check-label" for="exampleCheck{{$category->id}}">{{$category->name}}</label>
          </div>
          <!-- </div> -->
          @endforeach
        </div>

      </div><br>
      <div class="col-lg-offset-1 col-lg-10">
        <button type="submit" class="btn btn-danger btn-sm pull-right">Save</button>   
      </div>
    </form>
    @endif
  </div>